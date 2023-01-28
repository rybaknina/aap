<?php
/*
 * Реализовать построение и обход дерева для математического выражения
 * просто пример расчета мат выражения.
 * */
function calcInPolishNotation($arr)
{
    $stack = [];
    $operations = ['+', '-', '*', '/'];
    foreach ($arr as $item) {
        if (!in_array($item, $operations)) {
            array_push($stack, $item);
        } else {
            $operand = $item;
            $b = array_pop($stack);
            $a = array_pop($stack);
            array_push($stack, operation($a, $b, $operand));
        }
    }
    return array_pop($stack);
}

function operation($a, $b, $operand): float|int
{
    return match ($operand) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b,
    };
}

// $str = "(5+3)*2";
// todo parser for string to array for polish notation
echo calcInPolishNotation([5, 3, '+', 2, '*']) . PHP_EOL; // 16
echo calcInPolishNotation([7, 2, 3, '*', '-']) . PHP_EOL; // 1
echo calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']) . PHP_EOL; // 15
echo calcInPolishNotation([7, 15, '-', '/', 2]) . PHP_EOL; // 2

