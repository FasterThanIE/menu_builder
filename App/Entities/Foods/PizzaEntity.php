<?php

namespace App\Entities\Foods;

class PizzaEntity extends FoodEntity
{
    public function __construct(string $name, float $price, bool $special = false)
    {
        parent::__construct($name, $price, $special);
    }
}