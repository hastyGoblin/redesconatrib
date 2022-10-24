<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstatusUsers;

class EstatusUsers extends Model
{
    use HasFactory;

    protected $table = 'estatusUsers';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'fk_estatus',
        'activo',
    ];
}
