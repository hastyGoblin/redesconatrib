<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
required('Codedge\Fpdf\fpdf\Fpdf.php');
use App\Models\constanciasUsuarios;
use Auth;
use User;
use DB;

class generaConstancia extends Controller
{

    private $fpdf;

    public function habilitaConstancia(Request $request){
        constanciasUsuarios::create([
            "fk_users" => $request->id_user,
            "activo" => 1,
        ]);

        DB::table('users')
        ->where ('id','=',$request->id_user)
        ->update(['estatus_const'=>1]);

        return redirect()->route('usuarioAceptado')->with('success','Constancia Habilitada');
    }

    public function descargaConstancia(Request $request){

        $id = $request->iduser;
        $nombre = $request->nombre;
        $appat = $request->appat;
        $apmat = $request->apmat;
        $red = $request->idred;

        $consulta = constanciasUsuarios::select('activo')
        ->where('fk_users', '=', $id)
        ->get();

        if ($consulta[0]->activo == 0) {
           return view('disponible');
        }else {
            $nom_com=utf8_decode(utf8_encode($nombre." ".$appat." ".$apmat));

            DB::table('constanciasUsuarios')
            ->where ('fk_users','=',$id)
            ->update(['activo'=>0]);


            $actualiza =  DB::table('users')
            ->where ('id','=', $id)
            ->update(['name'=>$nombre, 'apellido_paterno'=>$appat, 'apellido_materno'=>$apmat]);

            // return $actualiza;


            switch ($red) {

                case 1:
                    $ruta= "images/Constancias/red06_fondo_red_niñez.jpg";
                    break;

                case 2:
                    $ruta= "images/Constancias/red03_fondo_red_estadisticas.jpg";
                    break;

                case 3:
                    $ruta= "images/Constancias/red07_fondo_red_adolescentes.jpg";
                    break;

                case 4:
                    $ruta= "images/Constancias/red02_fondo_red_escuelas.jpg";
                    break;

                case 5:
                    $ruta= "images/Constancias/red05_fondo_red_mecanismos.jpg";
                    break;

                case 6:
                    $ruta= "images/Constancias/red01_fondo_red_centros_de_convivencia.jpg";
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
