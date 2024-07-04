<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\center>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nome' => fake()->name(),
            'mail' => fake()->safeEmail(),
            'Phone' => substr(fake()->phoneNumber, 0, 10), // Limit to 10 characters
            'Ville' => fake()->city(),
            'Date_S' => fake()->date(),
            'Status' => fake()->randomElement(['Active', 'In Active']),
            'Donor_N' => fake()->numberBetween(1000, 9999) // Adjust the range as needed
        ];
    }
}
