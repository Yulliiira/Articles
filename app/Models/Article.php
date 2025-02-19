<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'articles';

    protected $fillable = ['title', 'body', 'is_public', 'preview_image'];

    public $timestamps = true;

    protected function title() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => ucfirst($value),
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
