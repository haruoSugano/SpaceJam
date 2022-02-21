<?php

namespace Heliosugano\Desafio01Forseti\Parser;

use Heliosugano\Desafio01Forseti\Iterator\SiteMapIterator;

class SiteMapParser extends AbstractParser
{
    public function getIterator()
    {
        $xpath = "//table[@width='90%']//tr";

        return new SiteMapIterator($this->getHtml(), $xpath);
    }
}