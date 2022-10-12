<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersRoles extends Model
{
    use HasFactory;
    protected $table = 'usersRoles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fk_usersroles',
        'fk_roles',
    ];

    public function users(){
        return $this->HasOne(user::class, 'id', 'fk_usersroles');
    }

    public function roles(){
        return $this->Hasmany(roles::class, 'id', 'fk_roles');
    }
}