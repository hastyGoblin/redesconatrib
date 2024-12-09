<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\constanciasUsuarios;
use App\Models\cat_redesconatrib;
use App\Mail\RegistroMail;
use Auth;
use App\Models\User;
use DB;
use Mail;
use Carbon\Carbon;
use App\Models\roles;

class generaConstancia extends Controller
{

    private $fpdf;

    // Esta funcio es para habilitar constancias individuales
    // public function habilitaConstancia(Request $request)
    // {
    //     // Validar entrada
    //     $validated = $request->validate([
    //         'id_user' => 'required|exists:users,id',
    //     ]);

    //     // Recuperar usuario
    //     $user = User::find($validated['id_user']);

    //     // Recuperar red del usuario autenticado
    //     $red = cat_redesconatrib::find(Auth::user()->id_red);

    //     // Crear constancia del usuario
    //     constanciasUsuarios::create([
    //         "fk_users" => $user->id,
    //         "activo" => 1,
    //     ]);

    //     // Actualizar estatus del usuario
    //     $user->update(['estatus_const' => 1]);

    //     // Preparar información del correo
    //     $info = [
    //         'tipo_correo' => 4,
    //         'nombre' => $user->name,
    //         'correo' => $user->email,
    //         'red' => $red->red ?? 'Sin Red',
    //     ];

    //     // Enviar correo
    //     // Mail::to($user->email)->send(new RegistroMail($info));

    //     // Redirigir con mensaje de éxito
    //     return redirect()->route('home')->with('success', 'Constancia Habilitada');
    // }

    public function habilitaTodasConstancias()
    {
        // Validar que la relación funciona
        $userRoles = User::first()->roles;
        // dd($userRoles);

        // Recuperar todos los usuarios con rol 2 y que no tienen constancia habilitada
        $usuarios = User::where('estatus_const', 0)
        ->whereHas('roles', function ($query) {
            $query->where('roles.ID', 2); // Asegúrate de usar la clave primaria correcta
        })->get();

        foreach ($usuarios as $user) {
            // Crear constancia del usuario
            constanciasUsuarios::create([
                "fk_users" => $user->id,
                "activo" => 1,
            ]);

            // Actualizar estatus del usuario
            $user->update(['estatus_const' => 1]);

            // Preparar información del correo
            $info = [
                'tipo_correo' => 4,
                'nombre' => $user->name,
                'correo' => $user->email,
                'red' => Auth::user()->red ?? 'Sin Red',
            ];

            // Enviar correo
            Mail::to($user->email)->send(new RegistroMail($info));
        }

        return redirect()->route('home')->with('success', 'Constancias habilitadas para todos los usuarios');
    }


    // public function mostrarVistaConConstancias()
    // {
    //     // Obtener la fecha actual
    //     $fechaActual = Carbon::now();

    //     // Obtener el registro activo de la tabla cat_redesconatrib
    //     $redActiva = cat_redesconatrib::where('activo', 1)->first();

    //     // Inicializar la variable habilitarBoton como false por defecto
    //     $habilitarBoton = false;

    //     if ($redActiva) {
    //         // Si existe un registro activo, verificar si la fecha actual es mayor que la fechaFin
    //         $habilitarBoton = $fechaActual->gt(Carbon::parse($redActiva->fechaFin));
    //     }

    //     // Recuperar datos para la tabla
    //     $registradosRed = User::with('roles')->get();

    //     // Enviar respuesta como JSON
    //     return response()->json([
    //         'registradosRed' => $registradosRed,
    //         'habilitarBoton' => $habilitarBoton,
    //         'redActiva' => $redActiva,
    //     ]);
    // }


    public function descargaManual(){
        $filename = "ManualUsuario/241122_ManualdeUsuario_CONSTANCIA.pdf"; // el nombre con el que se descargará, puede ser diferente al original
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        readfile($filename);
        echo "descarga manual";
    }

    public function descargaConstancia(Request $request){

        $id = $request->iduser;
        $nombre = strtoupper($request->nombre);
        $appat = strtoupper($request->appat);
        $apmat = strtoupper($request->apmat);
        $red = $request->idred;

        $consulta = constanciasUsuarios::select('activo')
        ->where('fk_users', '=', $id)
        ->get();

        if ($consulta[0]->activo == 0) {
           return view('disponible');
        }else {
            $nom_com=utf8_decode(utf8_encode (mb_strtoupper($nombre." ".$appat." ".$apmat)));

            DB::table('constanciasUsuarios')
            ->where ('fk_users','=',$id)
            ->update(['activo'=>0]);


            $actualiza =  DB::table('users')
            ->where ('id','=', $id)
            ->update(['name'=>$nombre, 'apellido_paterno'=>$appat, 'apellido_materno'=>$apmat]);

            switch ($red) {

                case 1:
                    $ruta= "images/Constancias/proteccion_niñes.jpg";
                    break;

                case 2:
                    $ruta= "images/Constancias/estadisticas_judiciales.jpg";
                    break;

                case 3:
                    $ruta= "images/Constancias/red07_fondo_red_adolescentes.jpg";
                    break;

                case 4:
                    $ruta= "images/Constancias/escuelas_judiciales.jpg";
                    break;

                case 5:
                    $ruta= "images/Constancias/red05_fondo_red_mecanismos.jpg";
                    break;

                case 6:
                    $ruta= "images/Constancias/Apoyo_judicial_intervencion.jpg";
                    break;

                case 7:
                    $ruta= "images/Constancias/red04_fondo_red_jueces.jpg";
                    break;

                case 9:
                    $ruta= "images/Constancias/red08_fondo_red_nacional_de_archivos.jpg";
                    break;

                default:
                    $ruta= "";
                    break;
            }

            $this->fpdf = new Fpdf;

            $this->fpdf ->AddPage('Lanscape');
            $this->fpdf ->SetAutoPageBreak(0,0);

            $this->fpdf->Image($ruta,0,0,297,210);
            //$this->fpdf->SetFont('helvetica','',10);
            $this->fpdf->SetFont('Arial','B',24);
            $this->fpdf->SetXY(130,93);
            $this->fpdf->Cell(40,22,utf8_decode($nom_com),0,1,'C');
            //$this->fpdf->Text(10, 10, Auth::user()->nombre);
            //$this->fpdf->AddPage("A4");

            $this->fpdf->Output();
            exit;
        }


     }
}
