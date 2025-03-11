<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Articles\StoreArticleRequest;
use App\Http\Requests\Api\Articles\UpdateArticleRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Resources\Article\MinifiedArticleResource;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::query()->where('is_public', true)->get();
        return MinifiedArticleResource::collection($articles);
    }

    public function store(StoreArticleRequest $request)
    {
        if ($request->hasFile('preview_image')) {
            $previewImagePath = $request->file('preview_image')->store('article/previews', 'public');
            $previewImagePath = "/storage/$previewImagePath";
        } else {
            $previewImagePath = asset('storage/article/previews/default.png');
        }

        $article = Article::query()->create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'is_public' => $request->boolean('is_public'),
            'preview_image' => $previewImagePath ? "/storage/$previewImagePath" : null
        ]);
        return response()->json($this->show($article), 201);
    }

    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->validated());
        return response()->json($this->show($article));
    }

    public function destroy(Article $article)
    {
        return [
            'status' => $article->delete()
        ];
    }
}
