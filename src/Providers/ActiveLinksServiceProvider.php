<?php

namespace DesignByCode\ActiveLinks\Providers;


use DesignByCode\ActiveLinks\Helpers\Active;
use Illuminate\Support\ServiceProvider;

class ActiveLinksServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->alias(Active::class,'active');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/helpers.php' => config_path('helpers.php'),
        ], 'helpers');
    }

    public function provides()
    {
        return ['active'];
    }

}
