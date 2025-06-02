<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoClub extends Model
{
    /** @use HasFactory<\Database\Factories\ContactoClubFactory> */
    use HasFactory;

    public $table = 'contacto_club';
}
