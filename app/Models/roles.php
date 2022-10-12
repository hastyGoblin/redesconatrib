<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\roles;

class roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'rol',
    ];
}
