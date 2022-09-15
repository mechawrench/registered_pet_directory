<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'owner_name' => fake()->name(),
            'breed_id' => fake()->numberBetween(1, 3),
            'date_of_birth' => fake()->dateTimeBetween('-10 years', '-1 months'),
        ];
    }
}
