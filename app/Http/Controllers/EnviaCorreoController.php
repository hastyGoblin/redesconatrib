<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use Mail;

ini_set('max_execution_time', 0);
ini_set('memory_limit','20G');

class EnviaCorreoController extends Controller
{
    public function enviaCorreo(){
        $info_usuarios = User::where('activo','=', 1)->whereIn('id_red',[2,4])->get();
        $countUsuario=0;
        //echo $info_usuarios;
        foreach($info_usuarios as $usuario){
            $red = cat_redesconatrib::where('id','=', $usuario->id_red)->get();
            $info = [
                'nombre' => $usuario->name,
                'correo' => $usuario->email,
                'password' => $usuario->password_plano,
                'red' => $red[0]->red,
                ];
            Mail::to($usuario->email)->send(new RegistroMail($info));
            $countUsuario ++;

            //echo $usuario->email;
        }
        echo $countUsuario;
    }
}
