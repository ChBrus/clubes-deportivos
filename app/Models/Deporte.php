<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    /** @use HasFactory<\Database\Factories\DeporteFactory> */
    use HasFactory;

    public $table = 'deporte';

    public function posiciones()
    {
        return $this->hasMany(Posicion::class, 'deporte_id');
    }
}
