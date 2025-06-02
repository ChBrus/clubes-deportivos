<?php

namespace Database\Seeders;

use Database\Factories\DeporteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DeporteFactory::new()->createMany([
                ['nombre' => 'Fútbol', 'tipo' => 'colectivo'],
                ['nombre' => 'Baloncesto', 'tipo' => 'colectivo'],
                ['nombre' => 'Voleibol', 'tipo' => 'colectivo'],
                ['nombre' => 'Béisbol', 'tipo' => 'colectivo'],
                ['nombre' => 'Hockey', 'tipo' => 'colectivo'],
                ['nombre' => 'Rugby', 'tipo' => 'colectivo'],
                ['nombre' => 'Balonmano', 'tipo' => 'colectivo'],
                ['nombre' => 'Waterpolo', 'tipo' => 'colectivo'],
                ['nombre' => 'Críquet', 'tipo' => 'colectivo'],
                ['nombre' => 'Tenis', 'tipo' => 'individual'],
                ['nombre' => 'Atletismo', 'tipo' => 'mixto'],
                ['nombre' => 'Natación', 'tipo' => 'mixto'],
                ['nombre' => 'Ciclismo', 'tipo' => 'mixto'],
                ['nombre' => 'Boxeo', 'tipo' => 'individual'],
                ['nombre' => 'Judo', 'tipo' => 'individual'],
                ['nombre' => 'Taekwondo', 'tipo' => 'individual'],
                ['nombre' => 'Karate', 'tipo' => 'individual'],
                ['nombre' => 'Gimnasia', 'tipo' => 'individual'],
                ['nombre' => 'Golf', 'tipo' => 'individual'],
                ['nombre' => 'Esgrima', 'tipo' => 'individual'],
                ['nombre' => 'Bádminton', 'tipo' => 'mixto'],
                ['nombre' => 'Tenis de mesa', 'tipo' => 'mixto'],
                ['nombre' => 'Squash', 'tipo' => 'individual'],
                ['nombre' => 'Remo', 'tipo' => 'mixto'],
                ['nombre' => 'Piragüismo', 'tipo' => 'mixto'],
                ['nombre' => 'Surf', 'tipo' => 'individual'],
                ['nombre' => 'Skateboarding', 'tipo' => 'individual'],
                ['nombre' => 'Escalada', 'tipo' => 'individual'],
                ['nombre' => 'Patinaje', 'tipo' => 'mixto'],
                ['nombre' => 'Triatlón', 'tipo' => 'individual'],
                ['nombre' => 'Pentatlón moderno', 'tipo' => 'individual'],
                ['nombre' => 'Lucha', 'tipo' => 'individual'],
                ['nombre' => 'Halterofilia', 'tipo' => 'individual'],
                ['nombre' => 'Tiro con arco', 'tipo' => 'individual'],
                ['nombre' => 'Tiro deportivo', 'tipo' => 'individual'],
                ['nombre' => 'Equitación', 'tipo' => 'individual'],
                ['nombre' => 'Motociclismo', 'tipo' => 'individual'],
                ['nombre' => 'Automovilismo', 'tipo' => 'individual'],
                ['nombre' => 'Softbol', 'tipo' => 'colectivo'],
                ['nombre' => 'Fútbol americano', 'tipo' => 'colectivo'],
                ['nombre' => 'Polo', 'tipo' => 'colectivo'],
                ['nombre' => 'Ultimate frisbee', 'tipo' => 'colectivo'],
                ['nombre' => 'Ráquetbol', 'tipo' => 'individual'],
                ['nombre' => 'Pádel', 'tipo' => 'mixto'],
                ['nombre' => 'Bowling', 'tipo' => 'individual'],
                ['nombre' => 'Billar', 'tipo' => 'individual'],
                ['nombre' => 'Ajedrez', 'tipo' => 'individual'],
            ]);
        } catch (\Exception $e) {}
    }
}
