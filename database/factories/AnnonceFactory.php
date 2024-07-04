<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
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
            'Titre' => $faker->sentence(),
            'Description' => $faker->text(),
            'image' => '4.jpg',
            'link' => $faker->url,
            'Date_Start' => $faker->date(),
            'Date_Stop' => $faker->date(),
        ];

    }
}
