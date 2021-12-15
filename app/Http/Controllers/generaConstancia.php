<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Auth;

class generaConstancia extends Controller
{

    private $fpdf;

    public function descargaConstancia(){
        $ruta= "images/Constancias/adolecentes.jpg";
        $this->fpdf = new Fpdf;

        $this->fpdf ->AddPage('Lanscape');
        $this->fpdf ->SetAutoPageBreak(0,0);

        $this->fpdf->Image($ruta,0,0,297,210);
        //$this->fpdf->SetFont('helvetica','',10);
        $this->fpdf->SetFont('Arial','B',24);
        $this->fpdf->SetXY(130,92);
        $this->fpdf->Cell(40,22,'C. '.utf8_decode(Auth::user()->name),0,1,'C');
        //$this->fpdf->Text(10, 10, Auth::user()->nombre); 
        //$this->fpdf->AddPage("A4");  
         
        $this->fpdf->Output();
        exit;
    }
}
