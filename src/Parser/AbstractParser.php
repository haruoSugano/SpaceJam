<?php

namespace Heliosugano\Desafio01Forseti\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    protected $html;

    public function __construct($html)
    {
        $this->html = $html;
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }

    public function getHtml()
    {
        return $this->html;
    }
}