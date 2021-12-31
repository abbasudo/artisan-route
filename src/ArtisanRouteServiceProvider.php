<?php

namespace Llabbasmkhll\ArtisanRoute;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ArtisanRouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix'     => 'artisan',
            'middleware' => ['api'],
        ];
    }

}
