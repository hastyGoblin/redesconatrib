<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles'; // Nombre de la tabla de roles
    protected $primaryKey = 'ID';
    protected $fillable = ['name']; // Campos que puedes asignar en masa

    /**
     * Relación con User a través de la tabla intermedia usersRoles
     */
    public function users()
    {
        return $this->belongsToMany(
            User::class,        // Modelo relacionado
            'usersRoles',       // Tabla intermedia
            'fk_roles',         // Clave foránea en usersRoles hacia Role
            'fk_UsersRoles'     // Clave foránea en usersRoles hacia User
        );
    }
}
