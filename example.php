<?php
define('__ROOT__', dirname(dirname(__FILE__)));
spl_autoload_register(function ($className) {
    require_once __ROOT__ . '/' . str_replace('\\','/',$className) . '.php';
});

$apiKey = '';
$apiSecret = '';
$productData = [];
$orderList = [];
$userData = [];
$eventData = [];

$datacue = new \DataCue\Client($apiKey, $apiSecret);

$datacue->products->create($productData);

$datacue->orders->batchCancel($orderList);

$datacue->events->track($userData, $eventData);
