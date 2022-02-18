<?php

namespace Heliosugano\Desafio01Forseti\Factory;

use GuzzleHttp\Client;
use Heliosugano\Desafio01Forseti\Enums\Urls;

class GuzzleClientFactory
{
    public static function getInstance ()
    {
        $config = [
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => Urls::USER_AGENT
            ]
        ];
        return new Client($config);
    }
}