<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class constanciasUsuarios extends Model
{
    use HasFactory;

    protected $table = 'constanciasusuarios';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'fk_users',
        'activo',
    ];
}
