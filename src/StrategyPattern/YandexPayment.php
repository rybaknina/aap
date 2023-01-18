<?php

namespace Nin\StrategyPattern;

class YandexPayment implements IPayment
{
    public function request(float $price)
    {
        echo "YandexPayment request with $price" . PHP_EOL;
    }

    public function response($phone)
    {
        echo "YandexPayment response to $phone" . PHP_EOL;
    }
}