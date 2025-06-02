<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JugadorEntrenador extends Model
{
    /** @use HasFactory<\Database\Factories\JugadorEntrenadorFactory> */
    use HasFactory;

    public $table = 'jugador_entrenador';
}
