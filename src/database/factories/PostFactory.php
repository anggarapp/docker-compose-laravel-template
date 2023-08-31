<?php

namespace Database\Factories;

use App\Models\Post;
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
            'title' => fake()->word(),
            'content' => fake()->paragraph(),
        ];
    }

    public function random()
    {

        return $this->state(function (array $attributes) {
            return [
                'unit_id' => \App\Models\Unit::all()->random()->id,
                'user_id' => \App\Models\User::all()->random()->id,
                'category_id' => \App\Models\Category::all()->random()->id,
            ];
        });
    }

    public function tagged()
    {
        return $this->afterCreating(function (Post $post) {
            return $post->tags()->sync(\App\Models\Tag::all()->random()->id);
        });
    }
}
