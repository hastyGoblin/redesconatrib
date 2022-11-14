<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\bitacoraUsuario;

class LogoutBitacoraController extends Controller
{
    public function registraLogout(){
        bitacoraUsuario::create([
            "fechaEvento" => Carbon::now(),
            "fk_usuarioBitacora" => Auth::user()->id,
            "fk_tipoEvento" => 2,
            "activo" => 1]);
    }
}
