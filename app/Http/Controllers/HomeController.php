<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\usersRoles;
use App\Models\User;

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
        $rol = usersroles::where('fk_usersroles','=', $id)->get();
        $red = cat_redesconatrib::where('id','=', $red_id)->get();

        if ($rol[0]->fk_roles == '1') {

            $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','email', 'users.id')
            ->join('UsersRoles AS UR','UR.fk_usersroles','=','users.id')
            ->join('roles AS R','R.ID','=','UR.fk_roles')
            ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
            ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
            ->where('users.activo','=','0')
            ->where('users.fk_estatus','=','1')
            ->where('users.id_red','=',$red_id)
            ->get();
            return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);


           

        }elseif ($rol[0]->fk_roles == '2') {
            switch ($red_id) {

                case 1:
                    $mensaje= "Red 1";
                    return view('red_1_cecofam');
                    break;

                case 2:
                    $mensaje= "Red 2";
                    return view('red_2_rejem');
                    break;

                case 3:
                    $mensaje= "Red 3";
                    return view('red_3_ej');
                    break;

                case 4:
                    $mensaje= "Red 4";
                    return view('red_4_jjocmed');
                    break;

                case 5: 
                    $mensaje= "Red 5";
                    return view('red_5_masc');
                    break;

                case 6:
                    $mensaje= "Red 6";
                    return view('red_6_cjpn');
                    break;

                case 7:
                    $mensaje= "Red 7";
                    return view('red_7_sijpa');
                    break;

                case 8:
                    $mensaje= "Red 8";
                    return view('red_8_aj');
                    break;

                default:

                break;

            }
            //return redirect()->route('home');
        }
        //return view('auth.aceptar');
    }
}
