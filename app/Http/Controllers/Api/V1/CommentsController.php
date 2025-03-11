<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Comment\StoreRequest;
use App\Models\Article;
class CommentsController extends Controller
{
    public function create(StoreRequest $request, Article $article)
    {
        if (!$article->is_public) {
            return response()->json(['error' => 'Комментарии к этой статье запрещены'], 400);
        }
        return $article->comments()->create($request->validated());
    }
}
