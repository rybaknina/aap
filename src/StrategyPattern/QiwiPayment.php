<?php

namespace Nin\StrategyPattern;

class QiwiPayment implements IPayment
{

    public function request(float $price)
    {
        echo "QiwiPayment request with $price" . PHP_EOL;
    }

    public function response($phone)
    {
        echo "QiwiPayment response to $phone" . PHP_EOL;
    }
}