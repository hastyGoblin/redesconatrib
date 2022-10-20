<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    use HasFactory;
    protected $table = 'UsersRoles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fk_UsersRoles',
        'fk_roles',
    ];

    public function users(){
        return $this->HasOne(user::class, 'id', 'fk_UsersRoles');
    }

    public function roles(){
        return $this->Hasmany(roles::class, 'id', 'fk_roles');
    }
}