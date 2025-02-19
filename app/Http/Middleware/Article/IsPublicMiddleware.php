<?php

namespace App\Http\Middleware\Article;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsPublicMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Article $article  
         */

        $article = $request->route('article');

        if(!$article->is_public){
            return abort(403);
        }

        return $next($request);
    }
}
