<?php

namespace softrang\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load package routes
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'dashboard');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

        // Publish assets
        $this->publishes([
            __DIR__.'/Resources/assets' => public_path('softrang/dashboard'),
        ], 'dashboard-assets');

        // Publish config
        $this->publishes([
            __DIR__.'/../config/dashboard.php' => config_path('dashboard.php'),
        ], 'dashboard-config');

      
        // Register custom seeder command
        if ($this->app->runningInConsole()) {
            $this->commands([
                \softrang\Dashboard\Console\SeedDashboardCommand::class,
            ]);
        }
    }

    public function register()
    {
        // Merge dashboard config
        $this->mergeConfigFrom(__DIR__.'/../config/dashboard.php', 'dashboard');
    }

    
}
