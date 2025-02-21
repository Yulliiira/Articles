<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;


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
        return $article;
    }
}
