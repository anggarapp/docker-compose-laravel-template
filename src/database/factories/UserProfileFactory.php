<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->word(),
            'last_name' => fake()->lastName(),
            'address' => fake()->address(),
            'picture_url' => fake()->imageUrl(360, 360, 'persons', true, 'asian', false, 'jpg'),
        ];
    }
}
