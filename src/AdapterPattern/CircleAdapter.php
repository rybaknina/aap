<?php

namespace Nin\AdapterPattern;

class CircleAdapter implements ICircle
{
    private $lib;

    public function __construct(CircleAreaLib $lib)
    {
        $this->lib = $lib;
    }

    /**
     * расчёт нахождения площади круга через диаметр
     * @param int $circumference значение длины окружности
     */
    function circleArea(int $circumference)
    {
        // Формула расчета диаметра круга через его длину D=P/π
        // π — число пи — математическая константа, примерно равная 3,14
        $d = $circumference / M_PI;
        return $this->lib->getCircleArea($d);
    }
}