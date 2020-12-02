<?php

namespace App\Controllers;

use App\Builders\MenuBuilder;
use App\Factories\FoodFactory;

class MainController
{
    /**
     * This function doesnt really do anything special besides just running the test code...
     */
    public function run(): void
    {
        $menu = new MenuBuilder();
        $menu->addFood(FoodFactory::CATEGORY_PASTA, "Ala Test", 20.5, true);
        $menu->addFood(FoodFactory::CATEGORY_BBQ, "BBQ", 26.5);

        var_dump($menu);
    }


}