<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'published_at' => $this->faker->dateTime(), // Генерирует случайное время до текущей даты
            'time' => $this->faker->numberBetween(1, 5), // Генерирует случайное время в формате HH:MM:SS
        ];
    }
}
