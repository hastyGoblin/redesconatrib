<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Auth;
use User;

class generaConstancia extends Controller
{


    private $fpdf;

    public function descargaConstancia(){

        // $registradosRed = User::select('name','apellido_paterno','apellido_materno','dependencia','cargo','numero_celular','email','users.id')
        // ->join('usersRoles AS UR','UR.fk_UsersRoles','=','users.id')
        // ->join('roles AS R','R.ID','=','UR.fk_roles')
        // ->join('estatusUsers AS EU','EU.ID','=','users.fk_estatus')
        // ->join('cat_redesconatrib AS CR','CR.ID','=','users.id_red')
        // ->where('users.activo','=','0')
        // ->where('users.fk_estatus','=','1')
        // ->where('UR.fk_roles','=','2')
        // ->where('users.id_red','=',$red_id)
        // ->orderBy('users.created_at','asc')
        // ->get();
        // return view('modulo_admin')->with('rol',$rol)->with('red',$red)->with('registradosRed',$registradosRed);

        $red = Auth::user()->id_red;
        switch ($red) {

            case 1:
                $ruta= "images/Constancias/red01_fondo_red_centros_de_convivencia copia.jpg";
                break;

            case 2:
                $ruta= "images/Constancias/red02_fondo_red_escuelas.jpg";
                break;

            case 3:
                $ruta= "images/Constancias/red03_fondo_red_estadisticas.jpg";
                break;

            case 4:
                $ruta= "images/Constancias/red04_fondo_red_jueces .jpg";
                break;

            case 5:
                $ruta= "images/Constancias/red05_fondo_red_mecanismos.jpg";
                break;

            case 6:
                $ruta= "images/Constancias/red06_fondo_red_niñez.jpg";
                break;

            case 7:
                $ruta= "images/Constancias/red07_fondo_red_adolescentes.jpg";
                break;

            case 8:
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
        $this->fpdf->Cell(40,22,utf8_decode(Auth::user()->name),0,1,'C');
        //$this->fpdf->Text(10, 10, Auth::user()->nombre);
        //$this->fpdf->AddPage("A4");

        $this->fpdf->Output();
        exit;
    }
}
