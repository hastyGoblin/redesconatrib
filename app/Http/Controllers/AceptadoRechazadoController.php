<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\usersRoles;
use App\Models\cat_redesconatrib;
use Carbon\Carbon;


class AceptadoRechazadoController extends Controller
{
    public function usuarioAceptado(){

        $id = Auth::User()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();

        $aceptado = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','numero_celular','email','users.id','entidad.entidad','estatus_const','users.updated_at')
                        ->join('usersRoles AS UR','UR.fk_UsersRoles','=','users.id')
                        ->join('roles AS R','R.ID','=','UR.fk_roles')
                        ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
                        ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
                        ->join('entidadfederativa AS entidad','entidad.id','=','users.fk_estado')
                        ->where('UR.fk_roles','=','2')
                        ->where('users.activo','=','1')
                        ->where('users.fk_estatus','=','2')
                        ->where('users.id_red','=',$red_id)
                        ->orderBy('users.updated_at')
                        ->get();

        return view('Aceptados')->with('rol',$rol)->with('red',$red)->with('aceptado',$aceptado);
    }

    public function usuarioRechazado(){

        $id = Auth::User()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();


        $rechazados = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','numero_celular','email','users.id','entidad.entidad','users.updated_at')
                            ->join('usersRoles AS UR','UR.fk_UsersRoles','=','users.id')
                            ->join('roles AS R','R.ID','=','UR.fk_roles')
                            ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
                            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
                            ->join('entidadfederativa AS entidad','entidad.id','=','users.fk_estado')
                            ->where('UR.fk_roles','=','2')
                            ->where('users.activo','=','0')
                            ->where('users.fk_estatus','=','3')
                            ->where('users.id_red','=',$red_id)
                            ->orderBy('users.updated_at')
                            ->get();

        return view('Rechazados')->with('rol',$rol)->with('red',$red)->with('rechazados',$rechazados);
    }

    public function validaInicioRed(Request $request){

        $red= $request->id_red;
        $fechaIniRed = cat_redesconatrib::select('fechaInicio')
                        ->where('id','=', $red)
                        ->get();
 
        $hoy = Carbon::now();

        if ($hoy < $fechaIniRed[0]->fechaInicio) {
            return response()->json(
                [
                    'registro' => 1
                ]
            );
        }else {
           return response()->json(
                [
                    'registro' => 0
                ]
            );
        }
    }
}
