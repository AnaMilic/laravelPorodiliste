<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Porodiliste;

class DoktorFactory extends Factory
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
            'iskustvo' => $this->faker->numberBetween($min = 1, $min = 45),
            'porodiliste_id' => Porodiliste::factory()
        ];
    }
}
