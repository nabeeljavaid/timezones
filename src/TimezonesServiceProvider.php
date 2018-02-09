<?php

namespace Nabeeljavaid\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Routes
        include __DIR__.'/routes.php';

        // Language
        $this->loadTranslationsFrom( __DIR__ . '/../resources/lang', 'timezones');
        
        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'timezones');
        
        // Public config
        $this->publishes([
            __DIR__ . '/../config/timezones.php' => config_path('timezones.php'),
        ], 'timezones');
        
        // Public resources
        $this->publishes([
            __DIR__ . '/../resources/assets' => base_path('resources/assets/laraveldaily/timezones'),
            __DIR__ . '/../resources/views' => base_path('resources/views/laraveldaily/timezones'),
            __DIR__ . '/../resources/lang' => base_path('resources/lang/laraveldaily/timezones'),
        ]);
 
       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__ . '/../config/timezones.php', 'timezones');
        
        // Controllers
        $this->app->make('Nabeeljavaid\Timezones\Controllers\TimezonesController');
        
        $this->app->bind('\Nabeeljavaid\Timezones\Timezones', function($app) {
            return new \Nabeeljavaid\Timezones\Timezones;
        });
    }
}
