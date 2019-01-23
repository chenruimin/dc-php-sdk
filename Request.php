<?php

namespace DataCue;

class Request
{
    private $apiKey = null;

    private $apiSecret = null;

    public function __construct($apiKey, $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    public function get($url)
    {

    }

    public function post($url, $data)
    {

    }
}
