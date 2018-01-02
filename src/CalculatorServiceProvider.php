<?php

namespace Dev\Prueba;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Dev\Prueba\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'prueba');
    }
}
