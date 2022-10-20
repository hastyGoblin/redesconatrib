<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\usersRoles;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\EntidadFederativa;

class AceptadoRechazadoController extends Controller
{
    public function usuarioAceptado(Request $request){

        $id = Auth::User()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();


        $aceptado = User::select('name','apellido_paterno','apellido_materno','dependencia','email','users.id',)
            ->join('UsersRoles AS UR','UR.fk_UsersRoles','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUsers AS EU','EU.ID','=','users.fk_estatus')
            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
            ->where('UR.fk_roles','=','2')
            ->where('users.activo','=','1')
            ->where('users.fk_estatus','=','2')
            ->where('users.id_red','=',$red_id)
            ->get();
            return view('Aceptados')->with('rol',$rol)->with('red',$red)->with('aceptado',$aceptado);
            //echo $aceptado;
    }

        

    public function usuarioRechazado(Request $request){
        $id = Auth::User()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();
        

        $rechazados = User::select('name','apellido_paterno','apellido_materno','dependencia','email','users.id',)
            ->join('UsersRoles AS UR','UR.fk_UsersRoles','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUsers AS EU','EU.ID','=','users.fk_estatus')
            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
            ->where('UR.fk_roles','=','2')
            ->where('users.activo','=','0')
            ->where('users.fk_estatus','=','3')
            ->where('users.id_red','=',$red_id)
            ->get();
            return view('Rechazados')->with('rol',$rol)->with('red',$red)->with('rechazados',$rechazados);        
    }
}
