<?php

use Heliosugano\Desafio01Forseti\PageObject\HomePageObject;

require __DIR__ . '/../vendor/autoload.php';

$homePage = new HomePageObject();

echo gettype($homePage);
//var_dump($homePage->getHome());
