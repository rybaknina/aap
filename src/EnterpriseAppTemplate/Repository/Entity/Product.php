<?php

namespace Nin\EnterpriseAppTemplate\Repository\Entity;

class Product implements IDomainObject
{
    /**
     * @param int $id
     * @param string $name
     * @param float $price
     */
    public function __construct(protected int $id, private string $name, private float $price)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}