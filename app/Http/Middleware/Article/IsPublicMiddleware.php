<?php

namespace App\Http\Middleware\Article;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsPublicMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Article $article
         */
        $article = $request->route('article');

        if (!$article) {
            return $next($request);
        }

        if (!$article->is_public) {
            if (str_contains($request->route()->getPrefix(), 'api')) {
                return response()->json(['message' => 'no success'], 400);
            }
            return abort(403);
        }

        return $next($request);
    }
}
