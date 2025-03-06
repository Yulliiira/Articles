<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\LoginRequest;
use App\Models\Token;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return response()->json([
                'message' => 'invalid login data'
            ], 401);
        }

        Token::query()->where('user_id', Auth::id())
            ->delete();

        $token = Token::query()->create([
            'user_id' => Auth::id(),
            'token' => Str::random(16)
        ]);

        return [
            'token' => $token->token
        ];
    }
}
