<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Club, ClubDeporte, Jugador};

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Club::factory(100)->create()->each(function ($club) {
            ClubDeporte::factory()->create([
                'club_id' => $club->id,
                'deporte_id' => rand(1, 47),
            ]);
            ClubDeporte::factory()->create([
                'club_id' => $club->id,
                'deporte_id' => rand(1, 47),
            ]);
            ClubDeporte::factory()->create([
                'club_id' => $club->id,
                'deporte_id' => rand(1, 47),
            ]);
            $club->jugadores()->saveMany(Jugador::factory(100)->make());
        });
    }
}
