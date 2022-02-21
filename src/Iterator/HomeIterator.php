<?php

namespace Heliosugano\Desafio01Forseti\Iterator;

use stdClass;

class HomeIterator extends AbstractIterator
{
    /**
     * @return mixed|stdClass
     */
    public function current()
    {
        $node = $this->crawler->current();

        $obj = new stdClass();

        $obj->link = $node->attributes->item(0)->value;

        return $obj;
    }
}