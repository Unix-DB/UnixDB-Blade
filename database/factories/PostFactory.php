<?php

namespace Database\Factories;

use App\Models\CPU;
use App\Models\Distribution;
use App\Models\GPU;
use App\Models\RAM;
use App\Models\Resolution;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'user_id' => User::query()->get('id')->random(),
            'image_url' => 'https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80',

            'distribution_id' => Distribution::query()->get('id')->random(),
            'resolution_id' => Resolution::query()->get('id')->random(),
            'ram_id' => Ram::query()->get('id')->random(),
            'cpu_id' => Cpu::query()->get('id')->random(),
            'gpu_id' => Gpu::query()->get('id')->random(),
            'kernel_id' => Kernel::query()->get('id')->random(),
            'terminal_id' => Terminal::query()->get('id')->random(),
            'editor_id' => Editor::query()->get('id')->random(),
            'shell_id' => Shell::query()->get('id')->random(),

            'repository_url' => $this->faker->url,

        ];
    }
}
