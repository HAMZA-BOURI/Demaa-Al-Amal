<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake();
        return [
            'nom' => $faker->lastName,
            'Prenom' => $faker->firstName,
            'Username' => $faker->unique()->userName,
            'Password' => bcrypt('Hamzabouri'),
            'Phone' => substr($faker->phoneNumber, 0, 10), // Limit to 10 characters
            'ID_Center' => 4,
            'Status' => $faker->randomElement(['Active', 'In Active']),
        ];

    }
}
