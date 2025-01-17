<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Route::get('/user/{name}/{surname}', [PostController::class, 'index']);



Route::resource('events', EventController::class);
