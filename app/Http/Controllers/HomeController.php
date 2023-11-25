<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\usersRoles;
use App\Models\User;
use App\Models\constanciasUsuarios;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder\SortDesc;
use DB;

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

        // $fechaHora = User::first()->created_at;
        // // $formato = Carbon::now();
        // $newDate = date("d/m/Y", strtotime($fechaHora));

        // $formatoFecha = $formato('Y-m-d');
        // $formatoDia = $fechaHora->format('Y-m-d'); //Damos formato al día 
        // return $newDate;

        if ($rol[0]->fk_roles == '1') {

            $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','numero_celular','email','users.id','entidad.entidad', 'users.created_at')
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
                                    
            return view('modulo_admin', compact('registradosRed', 'rol', 'red'));

        }elseif ($rol[0]->fk_roles == '2')
        {
            $registradosRed = User::select('name','apellido_paterno','apellido_materno','id_red','users.id')
                                    ->join('usersRoles AS UR','UR.fk_UsersRoles','=','users.id')
                                    ->join('roles AS R','R.ID','=','UR.fk_roles')
                                    ->where('users.activo','=','1')
                                    ->where('users.fk_estatus','=','2')
                                    ->where('UR.fk_roles','=','2')
                                    ->where('users.id_red','=',$red_id)
                                    ->where('users.id','=',$id)
                                    ->get();

            // Activar Constancia
            $activoConst = constanciasUsuarios::where('fk_users','=', $id )->get();
            $existe = $activoConst->count();

            if ($existe == 0) {
                $activo = 0;
            } else {
                $activo=$activoConst[0]->activo;
            }

           $consulta= DB::table('constanciasUsuarios')->where('fk_users','=', $id )->get();}

           $fechaRed = cat_redesconatrib::select('fechaFin')->where('id','=', $red_id)->get();
   
           $hoy = Carbon::now();

            switch ($red_id) {
                case 1:
                    $mensaje= "Red 1";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_6_cjpn')->with('id_user',$id)->with('activo',$activo)
                                                ->with('nombre',$registradosRed[0]->name)
                                                ->with('appat',$registradosRed[0]->apellido_paterno)
                                                ->with('apmat',$registradosRed[0]->apellido_materno)
                                                ->with('idred',$red_id);
                    }
                    break;
                
                case 2:
                    $mensaje= "Red 2";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_3_ej')->with('id_user',$id)->with('activo',$activo)
                                                ->with('nombre',$registradosRed[0]->name)
                                                ->with('appat',$registradosRed[0]->apellido_paterno)
                                                ->with('apmat',$registradosRed[0]->apellido_materno)
                                                ->with('idred',$red_id);
                    }
                    break;

                case 3:
                    $mensaje= "Red 3";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_7_sijpa')->with('id_user',$id)->with('activo',$activo)
                                                    ->with('nombre',$registradosRed[0]->name)
                                                    ->with('appat',$registradosRed[0]->apellido_paterno)
                                                    ->with('apmat',$registradosRed[0]->apellido_materno)
                                                    ->with('idred',$red_id);
                    }
                    break;

                case 4:
                    $mensaje= "Red 4";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_2_rejem')->with('id_user',$id)->with('activo',$activo)
                                                    ->with('nombre',$registradosRed[0]->name)
                                                    ->with('appat',$registradosRed[0]->apellido_paterno)
                                                    ->with('apmat',$registradosRed[0]->apellido_materno)
                                                    ->with('idred',$red_id);
                    }
                    break;

                case 5:
                    $mensaje= "Red 5";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_5_masc')->with('id_user',$id)->with('activo',$activo)
                                                ->with('nombre',$registradosRed[0]->name)
                                                ->with('appat',$registradosRed[0]->apellido_paterno)
                                                ->with('apmat',$registradosRed[0]->apellido_materno)
                                                ->with('idred',$red_id);
                    }
                    break;

                case 6:
                    $mensaje= "Red 6";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_1_cecofam')->with('id_user',$id)->with('activo',$activo)
                                                ->with('nombre',$registradosRed[0]->name)
                                                ->with('appat',$registradosRed[0]->apellido_paterno)
                                                ->with('apmat',$registradosRed[0]->apellido_materno)
                                                ->with('idred',$red_id);
                    }
                    break;

                case 7:
                    $mensaje= "Red 7";
                    if ($hoy <= $fechaRed[0]->fechaFin) {
                        return view('disponible');
                    }else {
                        return view('red_4_jjocmed')->with('id_user',$id)->with('activo',$activo)
                                                    ->with('nombre',$registradosRed[0]->name)
                                                    ->with('appat',$registradosRed[0]->apellido_paterno)
                                                    ->with('apmat',$registradosRed[0]->apellido_materno)
                                                    ->with('idred',$red_id);
                    }
                    break;

                case 9:
                    $mensaje= "Red 9";
                    // if ($hoy <= $fechaRed[0]->fechaFin) {
                        // return view('disponible');
                    // }else {
                        return view('red_8_aj')->with('id_user',$id)->with('activo',$activo)
                                                ->with('nombre',$registradosRed[0]->name)
                                                ->with('appat',$registradosRed[0]->apellido_paterno)
                                                ->with('apmat',$registradosRed[0]->apellido_materno)
                                                ->with('idred',$red_id);
                    // }
                    break;

                default:

                break;

            }
            return redirect()->route('home');
        }
}
