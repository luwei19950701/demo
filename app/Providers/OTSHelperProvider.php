<?php

namespace App\Providers;

use App\Utils\OTSHelper;
use Illuminate\Support\ServiceProvider;

class OTSHelperProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('OTSHelper', function () {
            return new OTSHelper();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
