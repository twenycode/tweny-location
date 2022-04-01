<?php

namespace TwenyCode\TwenyLocation;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class TwenyLocationServiceProvider extends ServiceProvider
{
    //  Register services.
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tweny-location.php', 'tweny-location');
    }

    //  Bootstrap services.
    public function boot()
    {
        $this->bootResourcesViews();
        $this->bootBladeComponents();
    }

    //  Publishing files
    protected function offerPublishing()
    {
        $this->publishes([__DIR__.'/../config/permission.php' => config_path('permission.php'),], 'config');
        $this->publishes([__DIR__.'/../database/migrations/create_locations_table.php' => base_path('database/migrations/'.date('Y_m_d_His').'create_locations_tables.php'),
        ], 'migrations');
    }

    //  Load views from the package
    private function bootResourcesViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views','tweny-location');
    }

    //  Compile Blade Components
    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {

            foreach (config('tweny-location.components', []) as $alias => $component) {
                $blade->component($component, $alias);
            }
        });
    }
}
