<?php

namespace App\Factories;

use App\Entities\Foods\BbqEntity;
use App\Entities\Foods\PastaEntity;
use App\Entities\Foods\PizzaEntity;
use Exception;

class FoodFactory
{

    public const ALLOWED_CATEGORY = [
        self::CATEGORY_PIZZA, self::CATEGORY_BBQ, self::CATEGORY_PASTA,
    ];

    public const CATEGORY_PASTA = "pasta";
    public const CATEGORY_PIZZA = "pizza";
    public const CATEGORY_BBQ = "bbq";

    /**
     * @param string $category
     * @param string $name
     * @param float $price
     * @param bool $special
     * @return BbqEntity|PastaEntity|PizzaEntity
     */
    public static function generate(string $category, string $name, float $price, bool $special)
    {
        try {
            if (!self::isAllowedCategory($category)) {
                throw new Exception("Invalid category $category");
            }
        } catch (Exception $e) {
        }


        switch ($category) {
            case self::CATEGORY_PASTA:
                return new PastaEntity($name, $price, $special);

            case self::CATEGORY_BBQ:
                return new BbqEntity($name, $price, $special);

            case self::CATEGORY_PIZZA:
                return new PizzaEntity($name, $price, $special);
        }
    }

    /**
     * @param string $category
     * @return bool
     */
    private static function isAllowedCategory(string $category): bool
    {
        return in_array($category, self::ALLOWED_CATEGORY);
    }

}