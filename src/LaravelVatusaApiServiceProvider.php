<?php

namespace NotWes\LaravelVatusaApi;
use Illuminate\Support\ServiceProvider;

class LaravelVatusaApiServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/vatusa_api_config.php' => config_path('vatusa_api_config.php'),
        ], 'vatusa-api-config');
    }    
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/vatusa_api_config.php',
            'vatusa-api-config'
        );
    }
}