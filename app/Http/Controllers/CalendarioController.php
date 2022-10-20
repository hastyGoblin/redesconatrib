<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\UsersRoles;
use App\Models\cat_redesconatrib;
use App\Models\Roles;
use App\Models\EntidadFederativa;
use App\Http\Controllers\CalendarioController;

class CalendarioController extends Controller
{
    //public function redCalendario(Request $request){

        // $id = Auth::User()->id;
        // $red_id = Auth::user()->id_red;
        // $rol = UsersRoles::where('fk_UsersRoles','=', $id)->get();
        // $red = cat_redesconatrib::where('id','=', $red_id)->get();

        /*if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }*/
        // return view('fullcalendar');

        //     $caledario = User::join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
        //     ->where('users.id_red','=', $red)
        //     ->where('CR.fechaInicio','=')
}
