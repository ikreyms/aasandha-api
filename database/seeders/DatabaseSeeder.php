<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\IslandSeeder;
use Database\Seeders\AddressSeeder;
use Database\Seeders\PatientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(IslandSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(PatientSeeder::class);
    }
}
