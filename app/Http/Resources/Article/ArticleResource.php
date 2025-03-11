<?php

namespace App\Http\Resources\Article;

use App\Http\Resources\Comment\CommentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class ArticleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->image,
            'date' => $this->date,
            'comments' => CommentResource::collection($this->comments)
        ];
    }
}
