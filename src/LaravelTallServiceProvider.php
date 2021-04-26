<?php

namespace Jwohlfert23\LaravelTall;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Jwohlfert23\LaravelTall\Views\Components\Icon;

class LaravelTallServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tall');

        Blade::component('icon', Icon::class);

        collect(scandir(__DIR__.'/../resources/views/components'))
            ->filter(fn ($filename) => Str::endsWith($filename, '.blade.php'))
            ->each(function ($filename) {
                $component = str_replace('.blade.php', '', $filename);
                Blade::component('tall::components.'.$component, $component);
            });
    }
}
