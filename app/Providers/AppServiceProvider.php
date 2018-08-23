<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\RouteRegistrar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes(function (RouteRegistrar $router) {
            $router->forAccessTokens();
        });

        $expireIn = Carbon::now()->addDays(1);
        Passport::tokensExpireIn($expireIn);
        Passport::refreshTokensExpireIn($expireIn);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
