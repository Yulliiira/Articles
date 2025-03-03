<?php

namespace App\Http\Requests\Api\Comment;

use App\Http\Requests\Api\ApiRequest;

class StoreRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'body' => 'bail|required|string|max:500'
        ];
    }
}
