<?php

namespace App\Http\Middleware;

use App\Models\Token;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class TokenAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $token = Token::whereToken($token)->first();


        if (is_null($token)) {
            return response()->json([
                'message' => 'Auth error'
            ], 401);
        }

        Auth::setUser($token->user);

        return $next($request);
    }
}
