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
    public function definition()
    {
        return [
            'user_id'     => rand(1, 10),
            'category_id' => rand(1, 4),
            'title'       => $this->faker->text(15),
            'content'     => $this->faker->text,
        ];
    }
}
