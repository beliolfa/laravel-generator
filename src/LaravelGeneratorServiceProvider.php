<?php

namespace Disitec\LaravelGenerator;

use Illuminate\Support\ServiceProvider;

class LaravelGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../templates/scaffold/controller' => resource_path('infyom/infyom-generator-templates/scaffold/controller')
        ], 'simplified-controller');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
