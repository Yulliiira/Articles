<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Articles\StoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ArticlesController extends Controller
{
    public function list()
    {
        $articles = Article::query()->where('is_public', true)->get();
        $data = [];

        foreach ($articles as $article) {
            $data[] = [
                'id' => $article->id,
                'title' => $article->title,
                'body' => $article->body,
                'preview_image' => $article->preview_image,
            ];
        }
        return $data;
    }

    public function show(Article $article)
    {
        return [
            'id' => $article->id,
            'title' => $article->title,
            'body' => $article->body,
            'image' => $article->image,
            'date' => $article->date,
            'comments' => $article->comments->map(function ($comment) {
                return [
                    'user' => $comment->username,
                    'body' => $comment->body,
                ];
            }),
        ];

        // return $article;
    }

    public function create(StoreRequest $request)
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
}
