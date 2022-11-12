<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use App\Mail\CorreoConstancia;
use Mail;
use Auth;
use Illuminate\Support\Facades\DB;

ini_set('max_execution_time', 0);
ini_set('memory_limit','20G');

class EnviaCorreoController extends Controller
{
    public function enviaCorreo(){
        // $info_usuarios = User::where('activo','=', 0)->whereIn('id_red',[7,8,1,3,5,6,4,2])->get(); se comento
        // $info_usuarios = User::where('activo','=', 0)
        // ->where('id_red',[
        //     1,2,3,4,5,6,7,8,9
        // ])->get();
        // echo $info_usuarios;

        // $name = Auth::user()->name;
        // $email = Auth::user()->email;
        // $red_id =  Auth::user()->id_red;

        #$enviaCrorreo = User::whereBetween('id',[901, 1043])->get();
        //$enviaCrorreo = User::where('id_red', '=', 4)->whereNotIn('id',[8,9,158])->get();
        $enviaCrorreo = User::where('id_red', '=', 4)->whereIn('id',[4759, 5020, 5023, 5072])->get();
        $count = 0;
        foreach ($enviaCrorreo as $Correo){
            //echo $count." ".$Correo->name."<br>";  
            //echo $count." ".$Correo->email."<br>";  
            //echo $count." ".$Correo->id_red."<br>";   
            $red = cat_redesconatrib::where('id','=', $Correo->id_red)->get();
            //echo $count." ".$red[0]->red."<br>"; 
            $info = [
                'tipo_correo' => 2,
                'texto' => 'Registro exitoso',
                'name' => $Correo->name,
                'correo' => $Correo->email,
                'red' => $red[0]->red,
                ];
            print_r($info);
            echo"<br>";

            //Mail::to($Correo->email)->send(new RegistroMail($info));
            $count++;  
        }
        echo $count;
        




        //$info_usuarios = User::where('email','=','agustin.martinez@tsjcdmx.gob.mx')->get();
        //$usuario=$info_usuarios;
        //$countUsuario=0;
        // echo count($info_usuarios); se comneto desdce esta linea
        // foreach($info_usuarios as $usuario){
        //     //while ($countUsuario <= 10) {
        //         # code...

        //     $red = cat_redesconatrib::where('id','=', $usuario->id_red)->get();
        //     //echo $red;
        //     $info = [
        //         'nombre' => $usuario->name,
        //         'correo' => $usuario->email,
        //         'password' => $usuario->password_plano,
        //         'red' => $red[0]->red,
        //         ];
        //     Mail::to($usuario->email)->send(new RegistroMail($info));
        //     User::where('id','=', $usuario->id)
        //     ->update(['activo' => 1]); hasta aqui
            //$countUsuario ++;

            //echo $usuario->email;
        //}
        //echo $countUsuario;
    }

    public function enviaCorreoConstancia(){
        $info_usuarios = User::where('constancia','=', 1)->where('correoConstancia','=', 0)->get();
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
                 User::where('id','=', $usuario->id)
                ->update(['correoConstancia' => 1]);
            //}

        }

    }
}
