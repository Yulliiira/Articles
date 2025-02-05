<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreRequest;
use App\Models\Article;

class ArticlesController extends Controller
{
   public function create(StoreRequest $request)
   {
      $previewImagePath = $request->file('preview')->store('article/previews', 'public');

      // Создаем объект статьи
      $article = Article::create([
         'title' => $request->input('title'),
         'body' => $request->input('body'),
         'is_public' => $request->has('is_public'),
         'preview_image' => "/storage/$previewImagePath"
      ]);

      // Редирект на страницу статьи
      return redirect()->route('article', ['article' => $article->id]);
   }

}
