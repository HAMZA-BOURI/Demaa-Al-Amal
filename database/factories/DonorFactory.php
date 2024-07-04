<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DonorFactory extends Factory
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
            'Type_Blood' => $faker->bloodType(),
            'name' => $faker->lastName,
            'Prenom' => $faker->firstName,
            'Phone'=>'0656905921',
            'mail'=>$faker->email(),
            'Adresse'=>$faker->address(),
            'CIN'=>$faker->randomElement(['WA335532', 'WA335535','WA335537','WA335561','WA337532']),
            'ID_Center' => 4,
        ];
    }
}
