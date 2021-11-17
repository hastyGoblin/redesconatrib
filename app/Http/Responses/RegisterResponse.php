<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;
use App\Mail\RegistroMail;
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
        $email = Auth::user()->email;
        $this->guard->logout();

        //return parent::toResponse($request);
        
        $info = [
                'texto' => 'Registro exitoso'
                ];
        Mail::to($email)->send(new RegistroMail($info));
        return redirect()->route('register')->with('success','Registro exitoso se envió un correo a tu cuenta proporcionada');
    }
}