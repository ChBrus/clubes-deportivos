<?php

namespace Database\Seeders;

use App\Models\Posicion;
use App\Models\User;
use Database\Factories\ClubFactory;
use Database\Factories\GeneroFactory;
use Database\Factories\JugadorFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        $this->call([
            GeneroSeeder::class,
            PaisSeeder::class,
            DeporteSeeder::class,
            PosicionSeeder::class,
            ClubSeeder::class,
        ]);
    }
}
