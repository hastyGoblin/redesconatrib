<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use Mail;

class EnviaCorreoController extends Controller
{
    public function enviaCorreo(){
        $info_usuarios = User::where('activo','=', 1)->get();
        foreach($info_usuarios as $usuario){
            $red = cat_redesconatrib::where('id','=', $usuario->id_red)->get();
            $info = [
                'texto' => 'Registro exitoso',
                'correo' => $usuario->email,
                'red' => $red[0]->red,
                ];
            Mail::to($usuario->email)->send(new RegistroMail($info));
            //echo $usuario->email;
        }
    }
}
