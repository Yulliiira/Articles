<?php

namespace App\Http\Requests\Api\Articles;

use App\Http\Requests\Api\ApiRequest;
class UpdateArticleRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'title' => 'string|min:2|max:20',
            'body' => 'string|min:5|max:100',
            'is_public' => 'boolean',
            'preview_image' => 'string'
        ];
    }
}
