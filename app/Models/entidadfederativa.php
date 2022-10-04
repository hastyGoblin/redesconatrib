<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\entidadfederativa;

class entidadfederativa extends Model
{
    use HasFactory;
    
    protected $table = 'entidadfederativa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fk_estado',
        'activo',
    ]; 
}
