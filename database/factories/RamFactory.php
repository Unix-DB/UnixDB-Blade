<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ram>
 */
class RamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->company(),
            'capacity' => $this->faker->randomNumber(1, 9),
            'speed' => $this->faker->randomNumber(1, 9),
        ];
    }
}
