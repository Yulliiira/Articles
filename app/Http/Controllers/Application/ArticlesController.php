<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
   public function create(Request $request)
   {
      $data = [
         'string' => 'test',
         'number' => '1,5'
      ];
      $validator = Validator::make($data, [
         'string' => 'required|string|max:10',
         'number' => 'required|int|max:50',
      ]);
      dd($validator->errors());

      $request->validate([
         'title' =>'required|string|min:2|max:10',
         'body' =>'required|string|min:5|max:100',
         'preview' =>'required|image|mimes:png,jpg|max:800'
      ]);

      // $request->file('preview')->store('article/previews');
   }
}