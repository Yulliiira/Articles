<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'body' => fake()->text(100),
            'is_public' => fake()->boolean(),
        ];
    }
}
