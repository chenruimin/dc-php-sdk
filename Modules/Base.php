<?php

namespace DataCue\Modules;

class Base
{
    protected $request = null;

    public function __construct($request)
    {
        $this->request = $request;
    }
}
