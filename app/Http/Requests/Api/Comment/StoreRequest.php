<?php

namespace App\Http\Requests\Api\Comment;

use App\Http\Requests\Api\ApiRequest;
class StoreRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'body' => 'bail|required|string|max:500'
        ];
    }
}
