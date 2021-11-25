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
                return view('home',compact('mensaje'));
                break;

            case 2:
                $mensaje= "Red 2";
                break;

            default:

            break;

        }

        //return view('home',compact('mensaje'));
    }
}
