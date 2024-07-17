<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Island>
 */
class IslandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $atolls = include(database_path('data/atolls.php'));

        return [
            'name' => $this->faker->randomElement($atolls) . " " . $this->faker->city,
        ];
    }
}
