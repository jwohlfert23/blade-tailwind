<?php

namespace Jwohlfert23\BladeTailwind;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeTailwindServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::componentNamespace('Jwohlfert23\\BladeTailwind\\Views\\Components', 'tw');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tw');
    }
}
