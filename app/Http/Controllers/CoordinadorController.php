<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoordinadorController extends Controller
{
    $id = Auth::user()->id;

    $rol = usersRoles::where('fk_roles','=',$id);

    if($rol == '1'){
        return view('modulo_admin');
    }else{
        return view('red_1_cecofam');
    }
}

