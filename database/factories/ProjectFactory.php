<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'is_finished' => rand(0, 1),
            'start_date' => Carbon::now()->subDays(rand(1, 365)),
            'description' => $this->faker->sentence(7),
            'project_goal' => $this->faker->paragraph(2),
            'progress' => rand(0, 10),
            'image' => 'https://picsum.photos/seed/picsum/200/'.rand(290, 320),
        ];
    }
}
