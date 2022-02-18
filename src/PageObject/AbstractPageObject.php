<?php

namespace Heliosugano\Desafio01Forseti\PageObject;

use GuzzleHttp\ClientInterface;
use Heliosugano\Desafio01Forseti\Factory\GuzzleClientFactory;
use Heliosugano\Desafio01Forseti\Traits\ForsetiLoggerTrait;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client) ? $client : GuzzleClientFactory::getInstance();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (\Exception $error) {
            $this->error($error->getMessage());
            return null;
        }
    }
}