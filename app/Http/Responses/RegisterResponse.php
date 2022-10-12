<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;
use App\Mail\RegistroMail;
use App\Models\cat_redesconatrib;
use Auth;
use Mail;


class RegisterResponse extends FortifyRegisterResponse
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function toResponse($request)
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $red_id =  Auth::user()->id_red;
        
        $this->guard->logout();

        

        
        //return parent::toResponse($request);
        $red = cat_redesconatrib::where('id','=', $red_id)->get();

        
 
        $info = [
                'texto' => 'Registro exitoso',
                'name' => $name,
                'correo' => $email,
                'red' => $red[0]->red,
                ];
                //return $info;
                //echo "Coordinador";
                //print_r($info);
                //return redirect()->route('modulo_admin');
                
        //Mail::to($email)->send(new RegistroMail($info));
        
        return redirect()->route('register')->with('success','Registro exitoso se envió un correo a tu cuenta proporcionada');
        
    }
}