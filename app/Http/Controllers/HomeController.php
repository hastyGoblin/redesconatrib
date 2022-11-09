<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\usersRoles;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder\SortDesc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $red_id = Auth::user()->id_red;
        $rol = usersRoles::where('fk_UsersRoles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();


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
            //->where('users.created_at','<','CR.fechaInicio')
            ->get();
            return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);

        }
        elseif ($rol[0]->fk_roles == '2') {
            switch ($red_id) {

                case 1:
                    $mensaje= "Red 1";
                    // return view('disponible');
                    return view('red_6_cjpn');
                    break;

                case 2:
                    $mensaje= "Red 2";
                    // return view('disponible');
                    return view('red_3_ej');
                    break;

                case 3:
                    $mensaje= "Red 3";
                    return view('red_7_sijpa');
                    // return view('disponible');
                    break;

                case 4:
                    $mensaje= "Red 4";
                    return view('disponible');
                    break;

                case 5:
                    $mensaje= "Red 5";
                    // return view('disponible');
                    return view('red_5_masc');
                    break;

                case 6:
                    $mensaje= "Red 6";
                    // return view('disponible');
                    return view('red_1_cecofam');
                    break;

                case 7:
                    $mensaje= "Red 7";
                    return view('disponible');
                    break;

                case 8:
                    $mensaje= "Red 8";
                    return view('disponible');
                    break;

                default:

                break;

            }
            //return redirect()->route('home');
        }
        //return view('auth.aceptar');
    }
}
