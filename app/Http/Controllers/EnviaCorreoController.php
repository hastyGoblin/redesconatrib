<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use App\Mail\CorreoConstancia;
use Mail;

ini_set('max_execution_time', 0);
ini_set('memory_limit','20G');

class EnviaCorreoController extends Controller
{
    public function enviaCorreo(){
        $info_usuarios = User::where('activo','=', 0)->whereIn('id_red',[7,8,1,3,5,6,4,2])->get();
        //$info_usuarios = User::where('email','=','agustin.martinez@tsjcdmx.gob.mx')->get();
        //$usuario=$info_usuarios;
        //$countUsuario=0;
        echo count($info_usuarios);
        foreach($info_usuarios as $usuario){
            //while ($countUsuario <= 10) {
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

    public function enviaCorreoConstancia(){
        $info_usuarios = User::where('constancia','=', 1)->get();
        //$info_usuarios = User::where('email','=','agustin.martinez@tsjcdmx.gob.mx')->get();
        //$usuario=$info_usuarios;
        //$countUsuario=0;
        echo count($info_usuarios);
        foreach($info_usuarios as $usuario){
            //if($usuario->email == "agustin.martinez@tsjcdmx.gob.mx" || $usuario->email == "erika.jimenez@tsjcdmx.gob.mx"){
                $red = cat_redesconatrib::where('id','=', $usuario->id_red)->get();
                //echo $red;
                $info = [
                    'nombre' => $usuario->name,
                    'red' => $red[0]->red,
                    ];
                Mail::to($usuario->email)->send(new CorreoConstancia($info));
            //}
            
        }

    }
}
