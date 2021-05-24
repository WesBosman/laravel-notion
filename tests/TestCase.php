<?php

namespace WesBosman\LaravelNotion\Tests;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $loadEnvironmentVariables = true;

    public function getEnvironmentSetup($app)
    {
        // make sure, our .env file is loaded
        $app->useEnvironmentPath(__DIR__.'/..');
        $app->bootstrapWith([LoadEnvironmentVariables::class]);
        parent::getEnvironmentSetUp($app);
    }
}