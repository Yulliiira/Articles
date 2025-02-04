<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PagesController extends Controller
{
    protected $articles = [
        [
            'id' => 1,
            'title' => 'some post 1',
            'body' => 'Toasts for displaying and dismissing 1'
        ],
        [
            'id' => 2,
            'title' => 'some post 2',
            'body' => 'Toasts for displaying and dismissing 2'
        ],
    ];
    public function hello()
    {
        return view('pages.hello');
    }

    public function articles()
    {
        return view('pages.articles', ['articles' => $this->articles]);
    }

    public function showArticle($article)
    {
        $article = array_filter($this->articles, function ($item) use ($article) {
            return $item['id'] === (int)$article;
        });
        $article = array_shift($article);

        return view('pages.article', ['title' => $article['title'], 'body' => $article['body']]);
    }
    public function createArticle()
    {
        return view('pages.article_create');
    }
}
