<?php

namespace Disitec\LaravelGenerator;

use Disitec\LaravelGenerator\Commands\Scaffold;
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                Scaffold::class,
            ]);
        }
        
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'disitec');
        
        $this->publishes([
            __DIR__.'/../lang' => resource_path('lang/vendor/disitec'),
        ], 'disitec-lang');

        $this->publishes([
            __DIR__.'/../config/laravel_generator.php' => config_path('infyom/laravel_generator.php'),
            __DIR__.'/../templates/scaffold/controller' => resource_path('infyom/infyom-generator-templates/scaffold/controller')
        ], 'disitec-generator.init');
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
