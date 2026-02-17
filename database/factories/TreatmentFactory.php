<?php

namespace Database\Factories;

use App\Models\Disease;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treatment>
 */
class TreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'disease_id' => Disease::factory(),
            'name' => fake()->randomElement([
                'Medication',
                'Physiotherapy',
                'Surgery',
                'Diet Plan',
                'Exercise Program',
            ]),
            'description' => fake()->sentence(),
            'started_at' => fake()->dateTimeBetween('-2 years', 'now'),
            'ended_at' => fake()->optional()->dateTimeBetween('now', '+1 year'),
        ];
    }
}
