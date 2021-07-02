<?php

namespace Bhavinjr\Postal;

use GuzzleHttp\Client;

class Api
{
    protected $baseUrl 	= 'https://api.postalpincode.in/';

    /**
     * @var Client
     */
    protected $client    = null;

    public function __construct()
    {
        $this->client  	= 	$this->getClient();
    }

    protected function getBaseUrl()
    {
        return $this->baseUrl;
    }

    protected function getClient()
    {
        return new Client([
            'base_uri' => $this->getBaseUrl(),
        ]);
    }

    protected function getFullUrl()
    {
        return $this->getBaseUrl();
    }
}
