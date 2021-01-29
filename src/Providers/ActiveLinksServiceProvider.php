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
        $this->app->bind('active', function($app) {
            return new Active();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/active-links.php' => config_path('active-links.php'),
        ], 'active-links');
    }

    /**
     * @return string[]
     */
    public function provides(): array
    {
        return ['active'];
    }

}
