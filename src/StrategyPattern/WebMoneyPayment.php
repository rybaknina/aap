<?php

namespace Nin\StrategyPattern;

class WebMoneyPayment implements IPayment
{
    public function request(float $price)
    {
        echo "WebMoneyPayment request with $price" . PHP_EOL;
    }

    public function response($phone)
    {
        echo "WebMoneyPayment response to $phone" . PHP_EOL;
    }
}