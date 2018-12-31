<?php

namespace W3public\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //include __DIR__.'/routes/web.php';
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator'); //calculator is package name
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
