<?php
// para utilizar la librer�a
define('FPDF_FONTPATH','font/');
require_once('fpdf.php');

//Creaci�n del objeto de la clase heredada
$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//Comenzamos a escribir el PDF:
$pdf->SetFont('Arial','B',20); //<-- Tipo de letra arial, Bold, tama�o 20
$pdf->write(8,"Hola mundo");  // <-- Cadena a escribir

//Terminamos el PDF y lo mandamos a la pantalla
$pdf->Output();
?>