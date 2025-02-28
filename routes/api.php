<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\V1\ArticlesController;
use App\Http\Controllers\Api\V1\CommentsController;
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

Route::controller(ArticlesController::class)->prefix('articles')->group(function () {
    Route::get('/', 'list');
    Route::get('/{article}', 'show')->middleware(IsPublicMiddleware::class);
    Route::post('/', 'create');
});
Route::controller(CommentsController::class)->group(function () {
    Route::post('/articles/{article}/comment', 'create');
});
