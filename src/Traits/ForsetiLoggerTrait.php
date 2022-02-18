<?php

namespace Heliosugano\Desafio01Forseti\Traits;

use Forseti\Logger\Logger;
use Psr\Log\LoggerTrait;

trait ForsetiLoggerTrait
{
    use LoggerTrait;

    public function log($level, $message, array $content = array())
    {
        return (new Logger(get_class($this)))->log($level, $message, $content);
    }
}