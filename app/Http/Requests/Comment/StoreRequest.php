<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => 'required|string|max:255',
            'body' => 'bail|required|string|max:500',
        ];
    }
}
