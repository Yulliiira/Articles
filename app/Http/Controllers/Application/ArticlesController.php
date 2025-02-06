<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;

class ArticlesController extends Controller
{
   public function create(StoreRequest $request) : RedirectResponse
   {
      if($request->hasFile('preview')){
         $previewImagePath = $request->file('preview')->store('article/previews', 'public');
      }else{
         asset('storage/article/previews/default.png');
      }

      $article = Article::create([
         'title' => $request->input('title'),
         'body' => $request->input('body'),
         'is_public' => $request->has('is_public'),
         'preview_image' => "/storage/$previewImagePath"
      ]);

      return redirect()->route('article', ['article' => $article->id]);
   }
   public function update(UpdateRequest $request, Article $article) : RedirectResponse
   {
      if ($request->hasFile('preview')) {
         $previewImagePath = $request->file('preview')->store('article/previews', 'public');
      } else {
         asset('storage/article/previews/default.png');
      }
      $article->update([
         'title' => $request->input('title'),
         'body' => $request->input('body'),
         'preview_image' => $previewImagePath ?? $article->preview_image,
         'is_public' => $request->has('is_public'),
      ]); 

      return redirect()->route('article', ['article' => $article->id]);
   }

}
