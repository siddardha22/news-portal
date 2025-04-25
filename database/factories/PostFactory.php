<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meta_title' => fake()->unique()->jobTitle(),
            'meta_keyword' => fake()->unique()->jobTitle(),
            'meta_description' => fake()->unique()->jobTitle(),
            'title' => fake()->unique()->jobTitle(),
            'image' => fake()->imageUrl,
            'description' => fake()->paragraph(50),
            'category_id' => random_int(1,10),
            'user_id' => 1,
        ];
    }
}
