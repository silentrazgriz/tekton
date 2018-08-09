<?php

namespace Gaia\Tekton;

use Illuminate\Support\ServiceProvider;

class TektonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(resource_path('views/vendor/tekton'), 'tekton');
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'tekton');

        $this->publishes([
            //__DIR__ . '/resources/views' => resource_path('views/vendor/tekton'),
            __DIR__ . '/config' => config_path(),
            __DIR__ . '/public' => public_path()
        ]);

        $this->app['router']->get('tekton/login', 'Gaia\Tekton\Controller\SampleController@login');
        $this->app['router']->get('tekton/sample', 'Gaia\Tekton\Controller\SampleController@sample');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
