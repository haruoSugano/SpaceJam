<?php

namespace Heliosugano\Desafio01Forseti\Parser;

use Exception;
use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    /**
     * @var string
     */
    protected $html;

    public function __construct($html)
    {
        $this->html = $html;
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }
}