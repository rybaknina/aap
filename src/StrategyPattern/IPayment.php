<?php

namespace Nin\StrategyPattern;

interface IPayment
{
    public function request(float $price);
    public function response($phone);
}