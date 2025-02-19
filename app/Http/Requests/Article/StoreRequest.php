<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2|max:20',
            'body' => 'required|string|min:5|max:100',
        ];
    }
}
