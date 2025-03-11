<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\LoginRequest;
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

        $token = Auth::user()->createToken('api-token');

        return [
            'token' => $token->plainTextToken
        ];
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
    }
}
