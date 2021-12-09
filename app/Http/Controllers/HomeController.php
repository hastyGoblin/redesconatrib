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
                return view('red_cecofam');
                break;

            case 2:
                $mensaje= "Red 2";
                return view('red_2_rejem');
                break;

            case 3:
                $mensaje= "Red 1";
                return view('red_cecofam');
                break;

            case 4:
                $mensaje= "Red 4";
                return view('red_4_jjocmed');
                break;



            default:

            break;

        }

        //return view('home',compact('mensaje'));
    }
}
