<?php

use Heliosugano\Desafio01Forseti\PageObject\HomePageObject;
use Heliosugano\Desafio01Forseti\PageObject\SiteMapPageObject;

require __DIR__ . '/../vendor/autoload.php';

$homePage = new HomePageObject();
$homeIterator = $homePage->getHome()->getIterator();
$links = [];
foreach ($homeIterator as $link) {
    $links[] = $link;
}

$siteMap = new SiteMapPageObject();
$siteMapIterator = $siteMap->getSiteMap($links[9]->link)->getIterator();
$contents = [];
foreach ($siteMapIterator as $content) {
    $contents[] = $content;
}

echo '----------------------------------------------------' .PHP_EOL;
echo 'Caminho da imagem: ';
echo $contents[0]->imagem . PHP_EOL;
echo '----------------------------------------------------' .PHP_EOL;
echo 'Descrição: ';
echo $contents[0]->descricao . PHP_EOL;
echo '----------------------------------------------------' .PHP_EOL;
echo 'Titulos de cada link: ';
echo $contents[0]->link . PHP_EOL;
