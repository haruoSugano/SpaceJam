<?php

namespace Heliosugano\Desafio01Forseti\Iterator;

use stdClass;

class SiteMapIterator extends AbstractIterator
{
    /**
     * @return mixed|stdClass
     */
    public function current()
    {
        $node = $this->crawler->current();

        $obj = new stdClass();

        $obj->descricao = $node->getElementsByTagName('td')->item(1)->textContent;
        $obj->link = $node->getElementsByTagName('td')->item(2)->textContent;
        $obj->imagem = $node->getElementsByTagName('img')->item(0)->attributes->item(0)->textContent;

        return $obj;
    }
}