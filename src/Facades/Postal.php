<?php

namespace Bhavinjr\Postal\Facades;

use Illuminate\Support\Facades\Facade;

class Postal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postal';
    }
}
