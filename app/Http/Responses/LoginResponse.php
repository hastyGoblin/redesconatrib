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

         $info = [
                'red' => $red[0]->red,
                ];

        //echo $rol;

        if ($id == '1') {
            return view('modulo_admin');
        }else{
        return view('red_1_cecofam');
        }


        //$this->guard->logout();

        //$rol = user::select(['id','name'])->where('id','=','5')->get();
        //$rol = usersRoles::select(['id'])->where('fk_roles','=','1')->get();
        //$rol = usersRoles::select('id')->get();


        //$rol = DB::usersRoles();

        
        //return redirect()->route('modulo_admin');
        
        /*if(auth()->users()->id = '1') {
            return redirect()->route('modulo_admin');
        } else {
            return redirect()->to('auth.login');
        }*/

        /*if(auth()->usersRoles()->fk_roles = '1') {
            return redirect()->route('modulo_admin');
        } else {
            return redirect()->to('auth.login');
        }*/

        
        /*$rol = Auth::user()->ID;

        $this->guard->logout();*/

		//return redirect()->route('modulo_admin');

        //return redirect()->route('modulo_admin')->with('success','Eres el mejor francis');
      
       
    }
}