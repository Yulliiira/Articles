<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Article;

class CommentsController extends Controller
{
    public function store(StoreRequest $request, Article $article)
    {
        $data = $request->validated();

        Comment::create([
            'article_id' => $article->id,
            'username' => $data['username'],
            'body' => $data['body'],
        ]);

        return redirect()->back()->with('success', 'Комментарий добавлен!');
    }
}
