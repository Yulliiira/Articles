<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UploadsController extends Controller
{
    public function image(Request $request)
    {
        return [
           'path' => "/storage/{$request->file('image')->store('article/previews', 'public')}"
        ];
    }
}
