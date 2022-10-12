<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $red = Auth::user()->id_red;
        

        switch ($red) {

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
        

        //return view('auth.aceptar');
    }
}
