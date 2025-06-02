<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubDeporte extends Model
{
    /** @use HasFactory<\Database\Factories\ClubDeporteFactory> */
    use HasFactory;

    public $table = 'club_deporte';
    public $timestamps = false;

    public function clubes()
    {
        return $this->belongsToMany(Club::class, 'club_deporte', 'deporte_id', 'club_id');
    }

    public function deportes()
    {
        return $this->belongsToMany(Deporte::class, 'club_deporte', 'deporte_id', 'deporte_id');
    }
}
