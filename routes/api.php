<?php

use App\Http\Controllers\Api\V1\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CommentsController;
use App\Http\Controllers\Api\V1\UploadsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Middleware\Article\IsPublicMiddleware;
use App\Http\Middleware\TokenAuthMiddleware;

Route::apiResource('articles', ArticlesController::class)
    ->middleware(IsPublicMiddleware::class)
    ->middleware(TokenAuthMiddleware::class, 'show');

Route::controller(CommentsController::class)->group(function () {
    Route::post('/articles/{article}/comment', 'create');
});
Route::controller(UploadsController::class)->prefix('uploads')->group(function () {
    Route::post('/image ', 'image');
});
Route::controller(UserController::class)->group(function() {
    Route::post('/login', 'login');
});
