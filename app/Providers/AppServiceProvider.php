<?php

namespace App\Providers;

use App\Http\Controllers\Interfaces\Auth\IRegisterService;
use App\Http\Controllers\Interfaces\User\IUserService;
use App\Http\Repositories\Auth\RegisterRepository;
use App\Http\Repositories\User\UserRepositoryImp;
use App\Http\Services\Auth\RegisterServiceImp;
use App\Http\Services\Interfaces\Auth\IRegisterRepository;
use App\Http\Services\Interfaces\User\IUserRepository;
use App\Http\Services\User\UserServiceImp;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IRegisterService::class, RegisterServiceImp::class);
        $this->app->bind(IRegisterRepository::class, RegisterRepository::class);

        $this->app->bind(IUserService::class, UserServiceImp::class);
        $this->app->bind(IUserRepository::class, UserRepositoryImp::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
