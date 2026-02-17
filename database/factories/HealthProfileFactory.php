<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthProfile>
 */
class HealthProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateOfBirth = fake()->dateTimeBetween('-80 years', '-18 years');

        return [
            // 'user_id' => User::factory(),

            'date_of_birth' => $dateOfBirth->format('Y-m-d'),

            'height' => fake()->numberBetween(150, 200), // cm
            'weight' => fake()->randomFloat(1, 50, 120), // kg

            'blood_group' => fake()->randomElement([
                'A+',
                'A-',
                'B+',
                'B-',
                'AB+',
                'AB-',
                'O+',
                'O-',
            ]),

            'pulse' => fake()->numberBetween(55, 100),

            'blood_pressure_systolic' => fake()->numberBetween(100, 140),
            'blood_pressure_diastolic' => fake()->numberBetween(60, 90),

            'allergies' => fake()->optional()->randomElements([
                'Pollen',
                'Dust',
                'Peanuts',
                'Seafood',
                'Penicillin',
            ], fake()->numberBetween(1, 3)),

            'chronic_diseases' => fake()->optional()->randomElements([
                'Diabetes',
                'Hypertension',
                'Asthma',
            ], fake()->numberBetween(1, 2)),

            'surgical_interventions' => fake()->optional()->randomElements([
                'Appendectomy',
                'Knee surgery',
                'Heart bypass',
            ], fake()->numberBetween(1, 2)),

            'cigarettes_per_day' => fake()->optional()->numberBetween(0, 20),

            'alcohol_beer_per_week' => fake()->numberBetween(0, 5000),
            'alcohol_wine_per_week' => fake()->numberBetween(0, 700),
            'alcohol_spirits_per_week' => fake()->numberBetween(0, 200),
        ];
    }
}
