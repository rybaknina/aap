<?php

namespace Nin\AdapterPattern;

class SquareAdapter implements ISquare
{
    private $lib;

    public function __construct(SquareAreaLib $lib)
    {
        $this->lib = $lib;
    }

    /**
     * расчёт нахождения площади через диагональ
     * @param int $sideSquare значение одной стороны
     */
    function squareArea(int $sideSquare)
    {
        // Формула определения длины диагонали квадрата d = a·√2
        $d = $sideSquare * sqrt(2);
        return $this->lib->getSquareArea($d);
    }
}