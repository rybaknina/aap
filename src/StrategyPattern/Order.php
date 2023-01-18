<?php

namespace Nin\StrategyPattern;

class Order
{
    protected $id;
    protected $price;
    protected $phone;

    /**
     * @param $id
     * @param $price
     * @param $phone
     */
    public function __construct($id, $price, $phone)
    {
        $this->id = $id;
        $this->price = $price;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }


}