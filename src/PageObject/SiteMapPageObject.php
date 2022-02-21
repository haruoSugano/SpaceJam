<?php

namespace Heliosugano\Desafio01Forseti\PageObject;

use Heliosugano\Desafio01Forseti\Enums\Urls;
use Heliosugano\Desafio01Forseti\Parser\SiteMapParser;
use Heliosugano\Desafio01Forseti\Traits\ForsetiLoggerTrait;

class SiteMapPageObject extends AbstractPageObject
{
    use ForsetiLoggerTrait;

    public function getSiteMap($url)
    {
        $this->info('Página Site Map...');
        $response = $this->request('GET', Urls::HOME_PAGE . $url);

        return new SiteMapParser($response->getBody()->getContents());
    }
}