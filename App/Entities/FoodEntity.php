<?php

namespace App\Entities;

class FoodEntity extends MenuItem
{

    /**
     * @var bool
     */
    private bool $special;

    /**
     * FoodEntity constructor.
     * @param string $name
     * @param float $price
     * @param bool $special
     */
    public function __construct(string $name, float $price, bool $special)
    {
        parent::__construct($name, $price);
        $this->setSpecial($special);
    }

    /**
     * @return bool
     */
    public function isSpecial(): bool
    {
        return $this->special;
    }

    /**
     * @param bool $special
     */
    public function setSpecial(bool $special): void
    {
        $this->special = $special;
    }
}