<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['article_id','username','body'];

    public $timestamps = true;

    protected function username(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => ucfirst($value),
        );
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}
