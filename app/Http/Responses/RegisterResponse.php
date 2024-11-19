<?php

namespace App\Http\Responses;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;
use App\Mail\RegistroMail;
use App\Models\cat_redesconatrib;
use GuzzleHttp\Psr7\Request;
use Mail;
use Illuminate\Support\Facades\Auth;

class RegisterResponse extends FortifyRegisterResponse
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function toResponse($request)
    {
        // echo"hola";
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

        return redirect()->route('register')->with('success', 'Se envió un correo a tu cuenta proporcionada');
    }
}
