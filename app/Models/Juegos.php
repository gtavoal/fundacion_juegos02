<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;

    protected $table = 'juegos';

    protected $fillable = [
        'id','nombre_juego','publico_objetivo','precio','empresa_id ','created_at','updated_at',
    ];

}
