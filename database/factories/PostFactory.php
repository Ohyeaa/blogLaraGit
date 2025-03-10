<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


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
            'title' => fake()->sentence(15, true),
            'content' => fake()->sentences(15, true),
            'is_premium' => fake()->boolean(),
            'created_at' => fake()->date(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
