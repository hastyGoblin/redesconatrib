<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\LoginResponse as FortifyLoginResponse;
use Illuminate\Support\Facades\DB;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\usersRoles;
use App\Models\User;
use Auth;
use Mail;


class LoginResponse extends FortifyLoginResponse
{
    //protected $guard;

    public function __construct()//StatefulGuard $guard)
    {
        //$this->guard = $guard;
    }

    public function toResponse($request)
    {

        $id = Auth::user()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersroles::where('fk_usersroles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();
        $id = Auth::user('fk_estatus', '=', '1');

        if ($rol[0]->fk_roles == '1') {
            $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','email','users.id',)
            ->join('UsersRoles AS UR','UR.fk_usersroles','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('EstatusUsers AS EU','EU.ID','=','users.fk_estatus')
            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
            ->where('users.activo','=','0')
            ->where('users.fk_estatus','=','1')
            ->where('users.id_red','=',$red_id)
            ->get();
            return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);
        }elseif ($rol[0]->fk_roles == '2') {
            return redirect()->route('home');
        }
    }
}