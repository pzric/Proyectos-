<?php
require 'fpdf/fpdf.php';
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->cell(100, 10, 'hola mundo', 1 , 1, 'c');
$pdf->Output();

?>
