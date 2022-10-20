<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\DB;
use App\Models\usersRoles;
use Auth;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input 
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:50'],
            'paterno' => ['required', 'string', 'max:50'],
            'materno' => ['required', 'string', 'max:50'],
            'dependencia' => ['required', 'string', 'max:120'],
            'fk_estado' => ['required', 'string', 'max:120'],
            'cargo' => ['required', 'string', 'max:120'],
            'celular' => ['required', 'string', 'max:15'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'id_red' => ['required', 'string', 'max:255', 'min:1'],
        ])->validate();

        $create = User::create([
            'name' => strtoupper($input['name']),
            'apellido_paterno' => strtoupper($input['paterno']),
            'apellido_materno' => strtoupper($input['materno']),
            'dependencia' => strtoupper ($input['dependencia']),
            'fk_estado' => strtoupper($input['fk_estado']),
            'cargo' => strtoupper($input['cargo']),
            'numero_celular' => $input['celular'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'id_red' => $input['id_red'],

        ]);

        $rolesdecanela = UsersRoles::create([
            'fk_UsersRoles'=>$create->id,
            'fk_roles'=>2,
        ]);

        return $create;
    }
}