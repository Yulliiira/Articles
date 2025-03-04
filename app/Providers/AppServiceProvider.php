<?php

namespace App\Providers;

use App\Http\Resources\Article\MinifiedArticleResource;
use Illuminate\Support\ServiceProvider;
use App\Providers\Services\MessagesStorageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        MinifiedArticleResource::withoutWrapping();
    }
}
