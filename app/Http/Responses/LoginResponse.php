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
        //dd($guard);
        //$this->guard = $guard;
    }

    public function toResponse($request)
    {

        /*if (DB::table('usersroles')->where('fk_roles','=','2')) {
            return view('modulo_admin');
        }else {

        }*/
        //$rol = Auth::user()->id; //con esta se puede identificar cualquier id 

        //$rol = user::where('activo','=','1')->get();

        //$rol = usersRoles::where('activo','=','1')->get();
         
          //where('fk_roles','=','')
        $id = Auth::user()->id;
        $red_id = Auth::user()->id_red;

        $rol = usersroles::where('fk_usersroles','=', $id)->get();

        $red = cat_redesconatrib::where('id','=', $red_id)->get();


        // $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','email')->where('activo','=','0')->where('id_red','=', $red_id)->get();

        // $registradosRed = User::join('usersroles AS UR','UR.fk_usersroles','=','users.id')
        // ->join('roles AS R', '')->get();

        $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','email')
        ->join('UsersRoles AS UR','UR.fk_usersroles','=','users.id')
        ->join('roles AS R','R.ID','=','UR.fk_roles')
        ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
        ->where('users.activo','=','0')
        ->where('users.fk_estatus','=','1')
        //->where('UR.fk_roles','=','2')
        ->get();

        if ($rol[0]->fk_roles == '1') {
            return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);
        }else{
            $rol[0]->fk_roles == '2';
                return redirect()->route('home');
        }


        //$this->guard->logout();

        //$rol = user::select(['id','name'])->where('id','=','5')->get();
        //$rol = usersRoles::select(['id'])->where('fk_roles','=','1')->get();
        //$rol = usersRoles::select('id')->get();

        //return redirect()->route('modulo_admin')->with('success','Eres el mejor francis');
      
       
    }
}