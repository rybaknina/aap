<?php

namespace Nin\StrategyPattern;

class ESocks
{
    protected $orders;

    /**
     * @param $orders
     */
    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function pay(IPayment $payment) {
        foreach ($this->orders as $order) {
            $payment->request($order->getPrice());
            $payment->response($order->getPhone());
        }
    }

}