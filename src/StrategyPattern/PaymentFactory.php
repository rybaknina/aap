<?php

namespace Nin\StrategyPattern;

class PaymentFactory
{
    public function createPayment($method)
    {
        if ($method === 'Qiwi'){
            return new QiwiPayment();
        }
        if ($method === 'Yandex'){
            return new YandexPayment();
        }
        if ($method === 'WebMoney'){
            return new WebMoneyPayment();
        }
        return null;
    }
}