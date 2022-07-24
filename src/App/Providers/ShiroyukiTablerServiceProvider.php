<?php

namespace Shiroyuki\Tabler\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ShiroyukiTablerServiceProvider extends ServiceProvider {
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
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'shiroyuki-tabler');

        Blade::componentNamespace('Shiroyuki\\Tabler\\App\\Views\\Components', 'shiroyuki-tabler');
    }
}
