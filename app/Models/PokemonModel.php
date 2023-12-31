<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonModel extends Model
{
    use HasFactory;
    protected $table = 'pokemon';
    protected $fillable = [
        'nombre',
        'tipo',
        'tamaño',
        'peso'
    ];
}
