<?php
	include 'plantilla2.php';
  require 'conexion2.php';
	if($_POST){
	$orden2=$_POST['orden2'];
	$query = "SELECT numero, nombre, marca, accion, fecha FROM actividad ORDER BY $orden2";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetX(35);
	$pdf->Cell(20,6,'Numero',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(30,6,'Accion',1,0,'C',1);
	$pdf->Cell(19,6,'Fecha',1,1,'C',1);


	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(35);
		$pdf->Cell(20,6,$row['numero'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['marca']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['accion']),1,0,'C');
		$pdf->Cell(19,6,utf8_decode($row['fecha']),1,1,'C');
	}
	$pdf->Output();
}
?>
