<?php

namespace App\Providers;

use App\Http\Resources\Article\MinifiedArticleResource;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        MinifiedArticleResource::withoutWrapping();
    }
}
