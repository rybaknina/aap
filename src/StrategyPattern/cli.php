<?php

use Nin\StrategyPattern\ESocks;
use Nin\StrategyPattern\Order;
use Nin\StrategyPattern\PaymentFactory;
use Nin\StrategyPattern\QiwiPayment;

require_once '../../vendor/autoload.php';

$orders = [
    new Order(1, "100", "111222333"),
    new Order(2, "200", "0009998888")
];

$paymentSystem = new PaymentFactory();
$eSocks = new ESocks($orders);
$eSocks->pay($paymentSystem->createPayment("Qiwi"));
$eSocks->pay($paymentSystem->createPayment("Yandex"));
$eSocks->pay($paymentSystem->createPayment("WebMoney"));



