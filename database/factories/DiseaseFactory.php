<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disease>
 */
class DiseaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->randomElement([
                'Diabetes',
                'Hypertension',
                'Asthma',
                'Arthritis',
                'Migraine',
            ]),
            'diagnosed_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'description' => fake()->sentence(),
        ];
    }
}
