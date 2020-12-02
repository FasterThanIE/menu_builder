<?php

require_once "vendor/autoload.php";

$menu = new \App\Builders\MenuBuilder();

$menu->addFood(\App\Factories\FoodFactory::CATEGORY_PASTA, "Ala Test", 20.5, true);


var_dump($menu->getFoods());