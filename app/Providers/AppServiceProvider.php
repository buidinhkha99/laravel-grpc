<?php

namespace App\Providers;

use App\Grpc\Contracts\Validator;
use App\Grpc\Controllers\AuthController;
use App\Grpc\LaravelValidator;
use Illuminate\Support\ServiceProvider;
use Protobuf\Identity\AuthServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(AuthServiceInterface::class, AuthController::class);
        $this->app->bind(Validator::class, LaravelValidator::class);
    }
}
