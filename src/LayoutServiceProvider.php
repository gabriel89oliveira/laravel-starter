<?php

namespace gabriel89oliveira\LaravelStarter;

use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{
    /**
    * Publishes translation files.
    *
    * @return  void
    */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/resources/MainLayout.vue' => $this->app->resourcePath() . '/Layouts/MainLayout.vue',
            __DIR__ . '/resources/Partials' => $this->app->resourcePath() . '/Layouts',
        ], 'laravel-sidebar-layout');
    }
}