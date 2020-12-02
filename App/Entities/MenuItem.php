<?php

namespace App\Entities;

use Exception;

abstract class MenuItem
{

    /**
     * Minimum food price
     */
    public const MINIMUM_ITEM_PRICE = 0;
    /**
     * @var string
     */
    protected string $name;
    /**
     * @var float
     */
    protected float $price;

    public function __construct(string $name, float $price)
    {
        $this->setName($name);
        try {
            $this->setPrice($price);
        } catch (Exception $e) {
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    public function setPrice(float $price): void
    {
        if ($price < self::MINIMUM_ITEM_PRICE) {
            throw new Exception("Item price cannot go bellow the minimum " . self::MINIMUM_ITEM_PRICE);
        }
        $this->price = $price;
    }
}