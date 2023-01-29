<?php

namespace Nin\Tree\RBTree;

use SplStack;

class Parser
{
    const PRIORITY_OPERATION = [
        "-" => ["priority" => "2", "association" => "left"],
        "+" => ["priority" => "2", "association" => "left"],
        "*" => ["priority" => "3", "association" => "left"],
        "/" => ["priority" => "3", "association" => "left"],
        "^" => ["priority" => "4", "association" => "right"]
    ];

    const NUMBER_PATTERN = "/[0-9a-zA-Z\.]/";
    const OPERATION_PATTERN = "/[\+\-\*\/\^]/";
    const OPEN_BRACKET = "(";
    const CLOSE_BRACKET = ")";

    private SplStack $stack;
    private array $buffer;

    /**
     * Parser constructor.
     */
    public function __construct()
    {
        $this->stack = new SplStack();
        $this->buffer = [];
    }

    /**
     * @param $str
     * @return array
     */
    public function run($str): array
    {
        $arr = $this->prepareString($str);
        return $this->parse($arr);
    }

    /**
     * @param $str
     * @return array
     */
    private function prepareString($str): array
    {
        $str = preg_replace("/\s/", "", $str);
        $str = str_replace(",", ".", $str);
        $str = str_split($str);

        // проверяем на оператор в начале, если первый символ операнд ставим впереди ноль
        if (preg_match(self::OPERATION_PATTERN, $str[0])) {
            array_unshift($str, "0");
        }
        return $str;
    }

    /**
     * @param $value
     */
    private function pushOperation($value)
    {
        while (true) {
            if ($this->stack->isEmpty()) {
                $this->stack->push($value);
                break;
            } else {
                $lastOperation = $this->stack->pop();

                $prevPriority = self::PRIORITY_OPERATION[$lastOperation]['priority'] ?? null;
                $currentPriority = self::PRIORITY_OPERATION[$value]['priority'] ?? null;
                $currentAssociation = self::PRIORITY_OPERATION[$value]['association'] ?? null;

                if ($currentAssociation === "left") {
                    if ($currentPriority > $prevPriority) {
                        $this->stack->push($lastOperation);
                        $this->stack->push($value);
                        break;
                    } else {
                        $this->buffer[] = $lastOperation;
                    }
                } elseif ($currentAssociation === "right") {
                    if ($currentPriority >= $prevPriority) {
                        $this->stack->push($lastOperation);
                        $this->stack->push($value);
                        break;
                    } else {
                        $this->buffer[] = $lastOperation;
                    }
                }
            }
        }
    }

    /**
     * @param $arr
     * @return array
     */
    private function parse($arr): array
    {
        $lastSymbolIsNumber = true;
        foreach ($arr as $key => $value) {
            if (preg_match(self::OPERATION_PATTERN, $value)) {
                $this->pushOperation($value);
                $lastSymbolIsNumber = false;
            } elseif (preg_match(self::NUMBER_PATTERN, $value)) {
                if ($lastSymbolIsNumber) {
                    $this->buffer[] = array_pop($this->buffer) . $value;
                } else {
                    $this->buffer[] = $value;
                    $lastSymbolIsNumber = true;
                }
            } elseif ($value == self::OPEN_BRACKET) {
                $this->stack->push($value);
                $lastSymbolIsNumber = false;
            } elseif ($value == self::CLOSE_BRACKET) {
                while (true) {
                    $symbol = $this->stack->pop();
                    if ($symbol != self::OPEN_BRACKET) {
                        $this->buffer[] = $symbol;
                    } else {
                        break;
                    }
                }
                $lastSymbolIsNumber = false;
            }
        }

        $length = $this->stack->count();
        for ($i = 0; $i < $length; $i++) {
            $this->buffer[] = $this->stack->pop();
        }
        return $this->buffer;
    }
}