<?php

namespace App\Providers;

use App\Interfaces\Services\IAuthService;
use App\Interfaces\Services\IUsersService;
use App\Services\Auth\AuthService;
use App\Services\Users\UsersService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(IUsersService::class, UsersService::class);
    }
}
