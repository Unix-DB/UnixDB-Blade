<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cpu>
 */
class CpuFactory extends Factory
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
            'model' => $this->faker->randomElement(['i3', 'i5', 'i7']),
            'architecture' => $this->faker->randomElement(['x86', 'x64', 'arm']),
            'generation' => $this->faker->randomNumber(1, 9),
        ];
    }
}
