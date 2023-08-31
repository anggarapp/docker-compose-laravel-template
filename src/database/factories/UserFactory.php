<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => fake()->userName(),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('samisami'), // samisami
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function random()
    {

        return $this->state(function (array $attributes) {
            return [
                'unit_id' => \App\Models\Unit::all()->random()->id,
            ];
        });
    }

    public function dev()
    {
        return $this->afterMaking(function (User $user) {
            return $user->assignRole('dev');
        });
    }
    public function easyAcc()
    {
        return $this->state(function (array $attributes) {
            return [
                'username' => 'developer',
                'password' => bcrypt('maidenlesstarnished'),
            ];
        });
    }
}
