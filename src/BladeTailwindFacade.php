<?php

namespace Jwohlfert23\BladeTailwind;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jwohlfert23\BladeTailwind\BladeTailwind
 */
class BladeTailwindFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-tall';
    }
}
