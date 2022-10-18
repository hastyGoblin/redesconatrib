<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\usersRoles;
use App\Models\User;

class EstatusController extends Controller
{
    public function aceptarUsuario(Request $request){

        $id = Auth::User()->id;
        $user = $request['id_user'];

        $estatus = User::where('id', $user)->update(['fk_estatus' => '2', 'activo' => '1']);
        return redirect()->route('home')->with('success','Usuario aceptado');
    }

    public function rechazarUsuario(Request $request){

        $id = Auth::User()->id;
        $user = $request['id_user'];

        $estatus = User::where('id', $user)->update(['fk_estatus' => '3']);
        return redirect()->route('home')->with('danger','Usuario rechazado');
    }
}
