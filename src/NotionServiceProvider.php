<?php

namespace WesBosman\LaravelNotion;

use Illuminate\Support\ServiceProvider;

class NotionServiceProvider extends ServiceProvider
{
    /**
     * Register application services
     * 
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/notion.php', 'notion'
        );
    }

    /**
     * Bootstrap package services
     * 
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/notion.php' => config_path('notion.php')
        ], 'config');

    }
}