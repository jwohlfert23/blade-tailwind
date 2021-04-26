<?php

namespace Jwohlfert23\LaravelTall\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Jwohlfert23\LaravelTall\LaravelTallServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Jwohlfert23\LaravelTall\BladeTailwindServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTallServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_blade-tailwind_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
