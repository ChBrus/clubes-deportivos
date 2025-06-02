<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    /** @use HasFactory<\Database\Factories\JugadorFactory> */
    use HasFactory;

    public $table = 'jugador';
}
