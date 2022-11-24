<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistroMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info =$info;//
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        switch ($this->info['tipo_correo']) {
            case 1://CORREO REGISTRO
                return $this->view('email.email_registro_2')->with('info',$this->info);
                break;

            case 2://CORREO ACEPTADO
                return $this->view('email.email_registro')->with('info',$this->info);
                break;

            case 3://CORREO RECHAZADO
                return $this->view('email.email_rechazo')->with('info',$this->info);
                break;
            case 4://CORREO CONFIRMACIÓN CONSTANCIA
                return $this->view('email.correoConstancia')->with('info',$this->info);
                break;
            default:
                // code...
                break;
        }
        //return $this->view('register')->with('info',$this->info);
        //return $this->view('email.email_registro_2')->with('info',$this->info);

    }
}
