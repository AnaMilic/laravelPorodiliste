<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doktor;

class BebaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'tezina' => $this->faker->numberBetween($min = 1500, $min = 5500),
            'doktor_id' => Doktor::factory()
        ];
    }
}
