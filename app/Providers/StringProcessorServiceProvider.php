<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class StringProcessorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MessageContentProcessors', 'App\Processors\MessageContentProcessorsPipeline');
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
