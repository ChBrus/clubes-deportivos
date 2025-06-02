<?php

namespace Database\Seeders;

use Database\Factories\PosicionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PosicionFactory::new()->createMany([
            ['nombre' => 'Portero', 'deporte_id' => 1], // Fútbol
            ['nombre' => 'Defensa', 'deporte_id' => 1],
            ['nombre' => 'Centrocampista', 'deporte_id' => 1],
            ['nombre' => 'Delantero', 'deporte_id' => 1],
            ['nombre' => 'Base', 'deporte_id' => 2], // Baloncesto
            ['nombre' => 'Escolta', 'deporte_id' => 2],
            ['nombre' => 'Alero', 'deporte_id' => 2], // Cambiado de 'Ala' a 'Alero' para ser más específico en baloncesto
            ['nombre' => 'Ala-Pívot', 'deporte_id' => 2], // Agregado Ala-Pívot
            ['nombre' => 'Pívot', 'deporte_id' => 2],
            ['nombre' => 'Acomodador', 'deporte_id' => 3], // Voleibol (cambiado de 'Lanzador')
            ['nombre' => 'Atacante Externo', 'deporte_id' => 3], // Receptor en voleibol es más específico
            ['nombre' => 'Opuesto', 'deporte_id' => 3],
            ['nombre' => 'Central', 'deporte_id' => 3],
            ['nombre' => 'Líbero', 'deporte_id' => 3],
            ['nombre' => 'Lanzador', 'deporte_id' => 4], // Béisbol
            ['nombre' => 'Receptor', 'deporte_id' => 4],
            ['nombre' => 'Primera Base', 'deporte_id' => 4],
            ['nombre' => 'Segunda Base', 'deporte_id' => 4],
            ['nombre' => 'Tercera Base', 'deporte_id' => 4],
            ['nombre' => 'Campocorto', 'deporte_id' => 4],
            ['nombre' => 'Jardinero Izquierdo', 'deporte_id' => 4],
            ['nombre' => 'Jardinero Central', 'deporte_id' => 4],
            ['nombre' => 'Jardinero Derecho', 'deporte_id' => 4],
            ['nombre' => 'Portero', 'deporte_id' => 5], // Hockey (asumiendo hockey sobre césped o hielo)
            ['nombre' => 'Defensa', 'deporte_id' => 5],
            ['nombre' => 'Mediocampista', 'deporte_id' => 5],
            ['nombre' => 'Delantero', 'deporte_id' => 5],
            ['nombre' => 'Primera Línea', 'deporte_id' => 6], // Rugby
            ['nombre' => 'Segunda Línea', 'deporte_id' => 6],
            ['nombre' => 'Tercera Línea', 'deporte_id' => 6],
            ['nombre' => 'Medio Scrum', 'deporte_id' => 6],
            ['nombre' => 'Apertura', 'deporte_id' => 6],
            ['nombre' => 'Centro', 'deporte_id' => 6],
            ['nombre' => 'Wing', 'deporte_id' => 6],
            ['nombre' => 'Zaguero', 'deporte_id' => 6],
            ['nombre' => 'Portero', 'deporte_id' => 7], // Balonmano
            ['nombre' => 'Central', 'deporte_id' => 7],
            ['nombre' => 'Lateral', 'deporte_id' => 7],
            ['nombre' => 'Extremo', 'deporte_id' => 7],
            ['nombre' => 'Pívot', 'deporte_id' => 7],
            ['nombre' => 'Portero', 'deporte_id' => 8], // Waterpolo
            ['nombre' => 'Defensa', 'deporte_id' => 8],
            ['nombre' => 'Boyas', 'deporte_id' => 8], // O 'Atacantes' / 'Centros'
            ['nombre' => 'Exteriores', 'deporte_id' => 8],
            ['nombre' => 'Bateador', 'deporte_id' => 9], // Críquet
            ['nombre' => 'Lanzador', 'deporte_id' => 9],
            ['nombre' => 'Fielder', 'deporte_id' => 9],
            // Para deportes individuales o donde las "posiciones" no son tan marcadas, se pueden usar nombres genéricos como "Jugador"
            ['nombre' => 'Jugador', 'deporte_id' => 10], // Tenis
            ['nombre' => 'Corredor', 'deporte_id' => 11], // Atletismo
            ['nombre' => 'Nadador', 'deporte_id' => 12], // Natación
            ['nombre' => 'Ciclista', 'deporte_id' => 13], // Ciclismo
            ['nombre' => 'Boxeador', 'deporte_id' => 14], // Boxeo
            ['nombre' => 'Judoca', 'deporte_id' => 15], // Judo
            ['nombre' => 'Taekwondista', 'deporte_id' => 16], // Taekwondo
            ['nombre' => 'Karateca', 'deporte_id' => 17], // Karate
            ['nombre' => 'Gimnasta', 'deporte_id' => 18], // Gimnasia
            ['nombre' => 'Golfista', 'deporte_id' => 19], // Golf
            ['nombre' => 'Esgrimista', 'deporte_id' => 20], // Esgrima
            ['nombre' => 'Jugador', 'deporte_id' => 21], // Bádminton
            ['nombre' => 'Jugador', 'deporte_id' => 22], // Tenis de mesa
            ['nombre' => 'Jugador', 'deporte_id' => 23], // Squash
            ['nombre' => 'Remero', 'deporte_id' => 24], // Remo
            ['nombre' => 'Piragüista', 'deporte_id' => 25], // Piragüismo
            ['nombre' => 'Surfista', 'deporte_id' => 26], // Surf
            ['nombre' => 'Skater', 'deporte_id' => 27], // Skateboarding
            ['nombre' => 'Escalador', 'deporte_id' => 28], // Escalada
            ['nombre' => 'Patinador', 'deporte_id' => 29], // Patinaje
            ['nombre' => 'Triatleta', 'deporte_id' => 30], // Triatlón
            ['nombre' => 'Atleta', 'deporte_id' => 31], // Pentatlón moderno
            ['nombre' => 'Luchador', 'deporte_id' => 32], // Lucha
            ['nombre' => 'Halterófilo', 'deporte_id' => 33], // Halterofilia
            ['nombre' => 'Arquero', 'deporte_id' => 34], // Tiro con arco
            ['nombre' => 'Tirador', 'deporte_id' => 35], // Tiro deportivo
            ['nombre' => 'Jinete', 'deporte_id' => 36], // Equitación
            ['nombre' => 'Piloto', 'deporte_id' => 37], // Motociclismo
            ['nombre' => 'Piloto', 'deporte_id' => 38], // Automovilismo
            ['nombre' => 'Lanzador', 'deporte_id' => 39], // Softbol (similar a Béisbol)
            ['nombre' => 'Receptor', 'deporte_id' => 39],
            ['nombre' => 'Infield', 'deporte_id' => 39],
            ['nombre' => 'Outfield', 'deporte_id' => 39],
            ['nombre' => 'Mariscal de Campo', 'deporte_id' => 40], // Fútbol americano
            ['nombre' => 'Corredor', 'deporte_id' => 40],
            ['nombre' => 'Receptor', 'deporte_id' => 40],
            ['nombre' => 'Línea Ofensiva', 'deporte_id' => 40],
            ['nombre' => 'Línea Defensiva', 'deporte_id' => 40],
            ['nombre' => 'Linebacker', 'deporte_id' => 40],
            ['nombre' => 'Back Defensivo', 'deporte_id' => 40],
            ['nombre' => 'Delantero', 'deporte_id' => 41], // Polo
            ['nombre' => 'Back', 'deporte_id' => 41],
            ['nombre' => 'Handler', 'deporte_id' => 42], // Ultimate Frisbee
            ['nombre' => 'Cutter', 'deporte_id' => 42],
            ['nombre' => 'Jugador', 'deporte_id' => 43], // Ráquetbol
            ['nombre' => 'Jugador', 'deporte_id' => 44], // Pádel
            ['nombre' => 'Jugador', 'deporte_id' => 45], // Bowling
            ['nombre' => 'Jugador', 'deporte_id' => 46], // Billar
            ['nombre' => 'Jugador', 'deporte_id' => 47], // Ajedrez
        ]);
    }
}
