<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
class ArticlesSeeder extends Seeder
{
    use HasFactory;

    public function run(): void
    {
        Article::factory(5)
        ->has(Comment::factory(rand(1,4)))
        ->create();
    }
}
