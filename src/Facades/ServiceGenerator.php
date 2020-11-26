<?php

namespace CapeAndBay\ServiceGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class ServiceGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'service-generator';
    }
}
