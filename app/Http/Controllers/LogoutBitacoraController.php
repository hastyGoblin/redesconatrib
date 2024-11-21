<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\bitacoraUsuario;
use Illuminate\Support\Facades\Log;

class LogoutBitacoraController extends Controller
{
    public function registraLogout()
    {
        Log::info('Método registraLogout alcanzado.');

        if (Auth::check()) {
            bitacoraUsuario::create([
                "fechaEvento" => Carbon::now(),
                "fk_usuarioBitacora" => Auth::user()->id,
                "fk_tipoEvento" => 2,
                "activo" => 1,
            ]);

            Log::info('Evento registrado correctamente.');
            return response()->json(['message' => 'Logout registrado correctamente'], 200);
        } else {
            Log::warning('Intento de logout sin usuario autenticado.');
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
    }
}
