<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class bcryptPassword extends Controller
{
    public function updatePassword(){
        $listaUsuarios = User::whereNull('password')->get();
        echo $listaUsuarios;

        foreach($listaUsuarios as $usuario){
            User::where('id','=', $usuario->id)
            ->update(['password' => bcrypt($usuario->password_plano)]);
        }  
    }
}
