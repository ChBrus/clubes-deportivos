<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /** @use HasFactory<\Database\Factories\GeneroFactory> */
    use HasFactory;

    public $table = 'genero';
    public $timestamps = false;

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'genero_id');
    }

    public function entrenadores()
    {
        return $this->hasMany(Entrenador::class, 'genero_id');
    }
}
