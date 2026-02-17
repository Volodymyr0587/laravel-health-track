<?php

namespace Database\Seeders;

use App\Models\Disease;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'john@doe.com'],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'password' => Hash::make('password123'),
            ]
        );

        $user->load([
            'diseases',
            'events'
        ]);

        // Prevent duplicate data on reseed
        if ($user->diseases()->count() === 0) {
            // Create diseases with treatments
            Disease::factory()
                ->count(3)
                ->for($user)
                ->has(Treatment::factory()->count(2))
                ->create();

            // Create events for this user
            Event::factory()
                ->count(5)
                ->for($user)
                ->create();
        }
    }
}
