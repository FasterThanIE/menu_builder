<?php

namespace App\Entities\Foods;

use App\Entities\MenuItem;

abstract class FoodEntity extends MenuItem
{

    private bool $special;

    /**
     * FoodEntity constructor.
     * @param string $name
     * @param float $price
     * @param bool $special
     */
    public function __construct(string $name, float $price, bool $special = false)
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