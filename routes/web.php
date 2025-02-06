<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\PagesController;
use App\Http\Controllers\Application\ArticlesController;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'hello')->name('hello');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/articles/create','createArticle')->name('article.page.create');
    Route::get('/articles/{article}','showArticle')->name('article');
    Route::get('/articles/{article}/edit','updateArticle')->name('article.page.edit');
});
Route::controller(ArticlesController::class)->group(function(){
    Route::post('articles/create', 'create')->name('articles.create');
    Route::post('articles/{article}/update', 'update')->name('articles.update');
});



