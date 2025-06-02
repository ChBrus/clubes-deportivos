<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\PaisFactory;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaisFactory::new()->createMany([
            [
                'nombre' => 'Argentina',
                'continente' => 'América del Sur',
            ],
            [
                'nombre' => 'Brasil',
                'continente' => 'América del Sur',
            ],
            [
                'nombre' => 'Chile',
                'continente' => 'América del Sur',
            ],
            [
                'nombre' => 'Colombia',
                'continente' => 'América del Sur',
            ],
            [
                'nombre' => 'México',
                'continente' => 'América del Norte',
            ],
            [
                'nombre' => 'España',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Francia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Alemania',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Italia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Japón',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'China',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'India',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Sudáfrica',
                'continente' => 'África',
            ],
            [
                'nombre' => 'Nigeria',
                'continente' => 'África',
            ],
            [
                'nombre' => 'Egipto',
                'continente' => 'África',
            ],
            [
                'nombre' => 'Australia',
                'continente' => 'Oceanía',
            ],
            [
                'nombre' => 'Nueva Zelanda',
                'continente' => 'Oceanía',
            ],
            [
                'nombre' => 'Canadá',
                'continente' => 'América del Norte',
            ],
            [
                'nombre' => 'Estados Unidos',
                'continente' => 'América del Norte',
            ],
            [
                'nombre' => 'Reino Unido',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Rusia',
                'continente' => 'Europa/Asia',
            ],
            [
                'nombre' => 'Corea del Sur',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Arabia Saudita',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Turquía',
                'continente' => 'Europa/Asia',
            ],
            [
                'nombre' => 'Suecia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Noruega',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Dinamarca',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Polonia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Países Bajos',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Bélgica',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Suiza',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Austria',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Grecia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Portugal',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Finlandia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'República Checa',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Hungría',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Rumania',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Bulgaria',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Croacia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Serbia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Eslovaquia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Eslovenia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Islandia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Irlanda',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Escocia',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Gales',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Luxemburgo',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Liechtenstein',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Mónaco',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Andorra',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'San Marino',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Vaticano',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Malta',
                'continente' => 'Europa',
            ],
            [
                'nombre' => 'Chipre',
                'continente' => 'Europa/Asia',
            ],
            [
                'nombre' => 'Kazajistán',
                'continente' => 'Asia/Europa',
            ],
            [
                'nombre' => 'Uzbekistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Turkmenistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Kirguistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Tayikistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Vietnam',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Tailandia',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Malasia',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Indonesia',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Filipinas',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Singapur',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Bangladesh',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Pakistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Sri Lanka',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Nepal',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Bután',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Maldivas',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Afganistán',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Irak',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Siria',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Líbano',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Jordania',
                'continente' => 'Asia',
            ],
            [
                'nombre' => 'Palestina',
                'continente' => 'Asia',
            ]
        ]);
    }
}