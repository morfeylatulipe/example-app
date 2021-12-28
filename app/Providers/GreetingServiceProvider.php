<?php

namespace App\Providers;

use App\Services\GreetingService;
use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GreetingService::class, function () {
            return new GreetingService();
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
