<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Island;
use Illuminate\Database\Seeder;

class IslandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Island::factory()
            ->count(30)
            ->has(Address::factory()->count(10))
            ->create();

        Island::factory()
            ->count(10)
            ->has(Address::factory()->count(20))
            ->create();

        Island::factory()
            ->count(15)
            ->has(Address::factory()->count(30))
            ->create();

        Island::factory()
            ->count(2)
            ->create();
    }
}
