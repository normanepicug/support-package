<?php
namespace Normanepicug\Support;
use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views","support");
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->mergeConfigFrom(__DIR__ . "/config/support.php","support");
        //publish the configuration file and views
        $this->publishes([
            __DIR__."/config/support.php" =>config_path('support.php'),
            __DIR__.'/views' => resource_path('views/vendor/support'),
        ]);
    }

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

}
