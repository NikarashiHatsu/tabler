<?php

namespace HatsuShiroyuki\Tabler\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap your package's services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'tabler');

        Blade::componentNamespace('HatsuShiroyuki\\Tabler\\App\\Views\\Components', 'tabler');
    }
}
