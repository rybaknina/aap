<?php

namespace Nin\AdapterPattern;

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        return ($diagonal ** 2) / 2;
    }
}