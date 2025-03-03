<?php

namespace App\Http\Requests\Api\Articles;


use App\Http\Requests\Api\ApiRequest;

class StoreArticleRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2|max:20',
            'body' => 'string|max:100',
            'prewiew' => 'image',
            'is_public' => 'boolean'
        ];
    }
}
