<?php

namespace DataCue;

class Client
{
    private static $modules = [
        'products' => \DataCue\Modules\Product::class,
        'users' => \DataCue\Modules\User::class,
        'orders' => \DataCue\Modules\Order::class,
        'events' => Event::class,
    ];

    private $products = null;

    private $users = null;

    private $orders = null;

    private $events = null;

    private $request = null;

    public function __construct($apiKey, $apiSecret)
    {
        $this->request = new Request($apiKey, $apiSecret);
    }

    public function __get($propertyName)
    {
        if (array_key_exists($propertyName, static::$modules) && is_null($this->{$propertyName})) {
            $this->{$propertyName} = new static::$modules[$propertyName]($this->request);
        }

        return $this->{$propertyName};
    }
}
