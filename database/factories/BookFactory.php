<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'ISBN' => fake()->isbn13(),
            'edition' => fake()->randomDigit(),
            'author' => fake()->name(),
            'pages' => fake()->numberBetween(100, 455),
            'publisher' => fake()->name()
        ];
    }
}
