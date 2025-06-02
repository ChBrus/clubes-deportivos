<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    /** @use HasFactory<\Database\Factories\PaisFactory> */
    use HasFactory;

    public function clubes()
    {
        return $this->hasMany(Club::class, 'pais_id');
    }
}
