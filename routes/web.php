<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\PagesController;
use App\Http\Controllers\Application\ArticlesController;
use App\Http\Controllers\Application\CommentsController;
use App\Http\Controllers\Application\RegisterController;
use App\Http\Controllers\Application\LoginController;
use App\Http\Middleware\Article\IsPublicMiddleware;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'hello')->name('hello');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/articles/create', 'createArticle')
        ->name('article.page.create')
        ->middleware('auth');

    Route::get('/articles/{article}', 'showArticle')
        ->middleware(IsPublicMiddleware::class)
        ->name('article');
    Route::get('/articles/{article}/edit', 'updateArticle')->name('article.page.edit');
});

Route::controller(ArticlesController::class)->middleware('auth')->group(function () {
    Route::post('articles/create', 'create')->name('articles.create');
    Route::post('articles/{article}/update', 'update')->name('articles.update');
    Route::post('articles/{article}/delete', 'delete')->name('articles.delete');
});

Route::controller(CommentsController::class)->group(function () {
    Route::post('/articles/{article}/comments', 'store')->name('comments.store');
});

Route::controller(RegisterController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'index')->name('register.form');
    Route::post('/register', 'register')->name('register.action');
});

Route::controller(LoginController::class)->middleware('guest')->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login.action');
    Route::post('/logout', 'logout')->name('logout')->withoutMiddleware('guest');
});
