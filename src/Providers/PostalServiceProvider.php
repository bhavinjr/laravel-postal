<?php

namespace Bhavinjr\Postal\Providers;

use Illuminate\Support\ServiceProvider;
use Bhavinjr\Postal\Postal;

class PostalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('postal', Postal::class);
    }

    public function provides()
    {
        return ['Postal'];
    }
}
