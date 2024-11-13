<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\LoginResponse as FortifyLoginResponse;
use App\Models\cat_redesconatrib;
use App\Models\usersRoles;
use App\Models\bitacoraUsuario;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder\SortDesc;


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
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();

        $formatodiaAgendado = new Carbon();
        $formatodiaAgendado->format('Y-m-d');

        bitacoraUsuario::create([
            "fechaEvento" => Carbon::now(),
            "fk_usuarioBitacora" => $id,
            "fk_tipoEvento" => 1,
            "activo" => 1
        ]);

        if ($rol[0]->fk_roles == '1') {

            $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','numero_celular','email','users.id','entidad.entidad')
            ->join('usersRoles AS UR','UR.fk_UsersRoles','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
            ->join('entidadfederativa AS entidad','entidad.id','=','users.fk_estado')
            ->where('users.activo','=','0')
            ->where('users.fk_estatus','=','1')
            ->where('UR.fk_roles','=','2')
            ->where('users.id_red','=',$red_id)
            ->orderBy('users.created_at','asc')
            ->get();

            return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);

        }elseif ($rol[0]->fk_roles == '2') {
            
            return redirect()->route('home');

        }
    }
}