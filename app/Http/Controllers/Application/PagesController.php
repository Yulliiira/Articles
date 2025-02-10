<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;


class PagesController extends Controller
{
    public function hello()
    {
        return view('pages.hello');
    }

    public function articles()
    {
        
        $articles = Article::where('is_public', true)->get();

        return view('pages.articles', compact('articles'));
    }

    public function showArticle(Article $article, Comment $comment)
    {
        return view('pages.article', compact('article'));
    }

    public function createArticle()
    {
        return view('pages.article_create');
    }

    public function updateArticle(Article $article)
    {
        return view('pages.article_edit', compact('article'));
    }
}
