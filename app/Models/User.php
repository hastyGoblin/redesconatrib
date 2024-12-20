<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'apellido_paterno',
        'apellido_materno',
        'dependencia',
        'fk_estado',
        'fk_estatus',
        'cargo',
        'numero_celular',
        'email',
        'password',
        'id_red',
        'estatus_const',
        'created_at' => 'datetime:Y-m-d H:i:s',
        //'correoConstancia',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function redes(){
        return $this->belongsTo(cat_redesconatrib::class, 'id', 'id_red');
    }
    public function entidades(){
        return $this->belongsTo(entidadfederativa::class, 'id', 'fk_estado');
    }
    public function estatuses(){
        return $this->belongsTo(EstatusUsers::class, 'id', 'fk_estatus');
    }
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,        // Modelo relacionado
            'usersRoles',       // Tabla intermedia
            'fk_UsersRoles',    // Clave foránea en usersRoles hacia User
            'fk_roles'          // Clave foránea en usersRoles hacia Role
        );
    }
}
