<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;


Route::get('/current-url', function (){
    return request()->fullUrl();
});



