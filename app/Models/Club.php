<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /** @use HasFactory<\Database\Factories\ClubFactory> */
    use HasFactory;

    public $table = 'club';

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'club_id', 'id');
    }

    public function entrenadores()
    {
        return $this->hasMany(Entrenador::class, 'club_id');
    }

    public function contactosClub()
    {
        return $this->belongsTo(ContactoClub::class, 'club_id');
    }
}
