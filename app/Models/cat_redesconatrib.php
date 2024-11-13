<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cat_redesconatrib;

class cat_redesconatrib extends Model
{
    use HasFactory;

    protected $table = 'cat_redesconatrib';
    protected $primaryKey = 'id';
    protected $fillable = [
        'red',
        'fechaInicio',
        'fechaFin',
        'landingPage',
        'activo',
    ];
}
