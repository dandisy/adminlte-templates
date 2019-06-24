<?php

namespace Webcore\AdminLTETemplates;

use Illuminate\Support\ServiceProvider;

class AdminLTETemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'adminlte-templates');

        /**
         * Publish templates assets
         */
        $this->publishes([
            __DIR__.'/public' => public_path(),
        ], 'public');

        /**
         * Publish templates views
         */
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
        ], 'views');
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
