<?php

namespace Heliosugano\Desafio01Forseti\Parser;

use Exception;
use Heliosugano\Desafio01Forseti\Iterator\HomeIterator;

class HomeParser extends AbstractParser
{
    /**
     * @throws Exception
     */
    public function getIterator()
    {
        $xpath = "//table//tr//td//a[@href]";

        return new HomeIterator($this->getHtml(), $xpath);
    }
}