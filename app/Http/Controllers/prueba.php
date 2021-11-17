<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prueba extends Controller
{
    public function index()
    {
    	return view('redesLogin');
    }


    public function validaCorreo(Request $request)
    {
    	$var1=$request->username;
    	echo $var1;
    }      
}
