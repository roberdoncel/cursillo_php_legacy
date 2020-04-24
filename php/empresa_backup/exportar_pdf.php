<?php


// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
include 'funciones.php';

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Roberto Doncel');
$pdf->SetTitle('Pérfil Empleado');
$pdf->SetSubject('Expediente empleado');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


// Set some content to print. En este caso los datos del empleado a partir del id del usuario.
$html = obtenerDatosEmpleado($_GET['id']);



// Print text using writeHTMLCell()
$pdf->writeHTMLCell(100, 0, 15, 20, $html, 0, 1, 0, true, '', true);

//Los 4 primeros parámetros son traslación X,Y y Factor de escala en porcentaje.
$pdf->Image(obtenerFotoEmpleado($_GET['id']), 115, 20, 70, 70, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');


?>