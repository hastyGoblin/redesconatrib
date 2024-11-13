<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Carbon\Carbon;
use App\Models\cat_redesconatrib;
use App\Models\usersRoles;
use Exception;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

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

        // Obtener la red y validar la fecha de inicio
        $red = cat_redesconatrib::find($input['id_red']);
        $hoy = Carbon::now()->format('Y-m-d');

        // Lanza una excepción si la fecha de inicio aún no ha llegado
        if ($red->fechaInicio > $hoy) {
            // return redirect()->route('register');
            // return view('auth.register');
            throw new Exception('El periodo de registro para esta red comenzará en la fecha indicada. Por favor, inténtelo de nuevo más adelante.');
        }

        // Crear el usuario
        $create = User::create([
            'name' => strtoupper($input['name']),
            'apellido_paterno' => strtoupper($input['paterno']),
            'apellido_materno' => strtoupper($input['materno']),
            'dependencia' => strtoupper($input['dependencia']),
            'fk_estado' => strtoupper($input['fk_estado']),
            'cargo' => strtoupper($input['cargo']),
            'numero_celular' => $input['celular'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'id_red' => $input['id_red'],
        ]);

        // Asignar el rol predeterminado al usuario
        usersRoles::create([
            'fk_UsersRoles' => $create->id,
            'fk_roles' => 2,
        ]);

        return $create;
    }
}
