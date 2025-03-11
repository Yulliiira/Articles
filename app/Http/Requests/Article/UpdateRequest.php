<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;
class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2|max:10',
            'body' => '|string',
            'preview' => '|image|mimes:png,jpg'
        ];
    }
}
