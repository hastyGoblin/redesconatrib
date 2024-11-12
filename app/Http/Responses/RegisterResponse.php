<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;
use App\Mail\RegistroMail;
use App\Models\cat_redesconatrib;
use Carbon\Carbon;
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
        $red = cat_redesconatrib::where('id','=', $red_id)->get();

        $info = [
                'tipo_correo' => 1,
                'texto' => 'Registro exitoso',
                'name' => $name,
                'correo' => $email,
                'red' => $red[0]->red,
                ];

       Mail::to($email)->send(new RegistroMail($info));

        // return redirect()->route('register')->with('warning','Registro exitoso se envió un correo a tu cuenta proporcionada');
        return redirect()->route('register')->with('success', 'Se envió un correo a tu cuenta proporcionada');

    }
}
