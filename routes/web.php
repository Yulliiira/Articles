<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/user/{name}/{surname}', [PostController::class, 'index']);

Route::get('/user/{id}/{slug}', function($id, $slug){
    return 'id:' . $id .'slug:' . $slug;
})->where('id', '[0-9]+')->where('slug', '[a-z0-9_-]+');

// Route::resource('messages', MessagesController::class);
