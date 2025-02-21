<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Middleware\Article\IsPublicMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Здесь регистрируются маршруты API для вашего приложения. Они автоматически
| будут использовать группу middleware "api".
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Добавь свои маршруты API здесь

Route::controller(ArticlesController::class)->group(function () {
    Route::get('articles', 'list');
    Route::get('articles/{article}', 'show')->middleware(IsPublicMiddleware::class);
});
