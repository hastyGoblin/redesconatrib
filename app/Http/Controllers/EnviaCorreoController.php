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
        $info_usuarios = User::where('activo','=', 0)->whereIn('id_red',[2,4])->get();
        //$usuario=$info_usuarios;
        //$countUsuario=0;
        echo $info_usuarios;
        foreach($info_usuarios as $usuario){
            //while ($countUsuario <= 90) {
                # code...
            
            $red = cat_redesconatrib::where('id','=', $usuario->id_red)->get();
            //echo $red;
            $info = [
                'nombre' => $usuario->name,
                'correo' => $usuario->email,
                'password' => $usuario->password_plano,
                'red' => $red[0]->red,
                ];
            Mail::to($usuario->email)->send(new RegistroMail($info));
            User::where('id','=', $usuario->id)
            ->update(['activo' => 1]);
            //$countUsuario ++;

            //echo $usuario->email;
        }
        //echo $countUsuario;
    }
}
