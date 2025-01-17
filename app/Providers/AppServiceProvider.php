<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Services\MessagesStorageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MessagesStorageService::class, function ($app) {
            return new MessagesStorageService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
