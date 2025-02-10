<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentsController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'body' => 'required|string|max:500',
        ]);

        Comment::create([
            'article_id' => $article->id,
            'username' => $request->input('username'),
            'body' => $request->input('body'),
        ]);

        return redirect()->back()->with('success', 'Комментарий добавлен!');
    }
}
