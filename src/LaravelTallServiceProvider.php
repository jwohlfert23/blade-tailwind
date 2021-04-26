<?php

namespace Jwohlfert23\LaravelTall;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelTallServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::componentNamespace('Jwohlfert23\\LaravelTall\\Views\\Components', 'tallw');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tall');
    }
}
