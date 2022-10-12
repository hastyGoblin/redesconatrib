<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinadorController extends Controller
{
    $id = Auth::user()->id;

    $rol = usersroles::where('fk_roles','=',$id);

    if($rol == '1'){
        return view('modulo_admin');
    }else{
        return view('red_1_cecofam');
    }
}

