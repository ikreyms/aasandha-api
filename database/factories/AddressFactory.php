<?php

namespace Database\Factories;

use App\Models\Island;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->streetAddress(),
            'road' => $this->faker->streetName(),
            'island_id' => Island::factory(),
        ];
    }
}
