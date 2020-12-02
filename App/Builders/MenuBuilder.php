<?php

namespace App\Builders;

use App\Entities\FoodEntity;

class MenuBuilder
{

    /**
     * @var array
     */
    public array $foods;

    /**
     * @var array
     */
    public array $drinks;

    /**
     * @var array
     */
    public array $sideDishes;

    /**
     * @return array
     */
    public function getFoods(): array
    {
        return $this->foods;
    }

    /**
     * @return array
     */
    public function getDrinks(): array
    {
        return $this->drinks;
    }

    /**
     * @return array
     */
    public function getSideDishes(): array
    {
        return $this->sideDishes;
    }

    /**
     * @param string $name
     * @param float $price
     * @param bool $special
     */
    public function addFood(string $name, float $price, bool $special = false): void
    {
        $this->foods[] = new FoodEntity($name, $price, $special);
    }


    /**
     * @param string $name
     * @param float $price
     */
    public function addDrink(string $name, float $price): void
    {
        // TODO: Add logic
    }

    /**
     * @param string $name
     * @param float $price
     */
    public function addSideDish(string $name, float $price): void
    {
        // TODO: Add logic
    }


}