<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExtrernalUserProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ExternalUserService', 'App\Services\ExternalUserService');
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
