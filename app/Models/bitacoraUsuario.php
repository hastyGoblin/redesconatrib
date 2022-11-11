<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacoraUsuario extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $table = 'bitacoraUsuario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fechaEvento',
        'fk_usuarioBitacora',
        'fk_tipoEvento',
        'activo',
    ];
}
