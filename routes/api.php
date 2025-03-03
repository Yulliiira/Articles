<?php

use App\Http\Controllers\Api\V1\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CommentsController;
use App\Http\Controllers\Api\V1\UploadsController;
use App\Http\Middleware\Article\IsPublicMiddleware;



Route::apiResource('articles', ArticlesController::class)
    ->middleware(IsPublicMiddleware::class);

Route::controller(CommentsController::class)->group(function () {
    Route::post('/articles/{article}/comment', 'create');
});
Route::controller(UploadsController::class)->prefix('uploads')->group(function () {
    Route::post('/image ', 'image');
});
