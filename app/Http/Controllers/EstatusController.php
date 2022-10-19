<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\usersRoles;
use App\Models\User;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use Mail;


class EstatusController extends Controller
{
    public function aceptarUsuario(Request $request){

        $user = $request['id_user'];

        $estatus = User::where('id', $user)->update(['fk_estatus' => '2', 'activo' => '1']);

        $datos_user = User::where('id','=', $user)->get();
        
        $red = cat_redesconatrib::where('id','=', $datos_user[0]->id_red)->get();

        $info = [
                'tipo_correo' => 2,
                'name' => $datos_user[0]->name,
                'correo' => $datos_user[0]->email,
                'red' => $red[0]->red,
                ];
                
        Mail::to($datos_user[0]->email)->send(new RegistroMail($info));

        return redirect()->route('home')->with('success','Usuario aceptado');
    }

    public function rechazarUsuario(Request $request){

        $user = $request['id_user'];

        $estatus = User::where('id', $user)->update(['fk_estatus' => '3']);

        $datos_user = User::where('id','=', $user)->get();
        
        $red = cat_redesconatrib::where('id','=', $datos_user[0]->id_red)->get();

        $info = [
                'tipo_correo' => 3,
                'name' => $datos_user[0]->name,
                'correo' => $datos_user[0]->email,
                'red' => $red[0]->red,
                ];
                
        Mail::to($datos_user[0]->email)->send(new RegistroMail($info));

        return redirect()->route('home')->with('danger','Usuario rechazado');
    }
}
