<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    /** @use HasFactory<\Database\Factories\PosicionFactory> */
    use HasFactory;

    public $table = 'posicion';

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'posicion_id');
    }
}
