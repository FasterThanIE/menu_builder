<?php

require_once "vendor/autoload.php";

$menu = new \App\Builders\MenuBuilder();

$menu->addFood("Pizza", 20.5, false);