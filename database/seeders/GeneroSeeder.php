<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\GeneroFactory;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            GeneroFactory::new()->createMany([
                ['descripcion' => 'Masculino'],
                ['descripcion' => 'Femenino'],
                ['descripcion' => 'No Binario'],
                ['descripcion' => 'Otro'],
            ]);
        } catch (\Exception $e) {}
    }
}
