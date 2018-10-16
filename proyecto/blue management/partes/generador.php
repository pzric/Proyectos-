<?php
	include 'plantilla.php';
	require 'conexion2.php';
	if($_POST){
	$orden=$_POST['orden'];
	$query = "SELECT numero, nombre, marca, disponibles, estante, piso, precio FROM agregar ORDER BY $orden";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetX(20);
	$pdf->Cell(20,6,'Numero',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(30,6,'Disponibles',1,0,'C',1);
	$pdf->Cell(19,6,'Estante',1,0,'C',1);
	$pdf->Cell(14,6,'Piso',1,0,'C',1);
	$pdf->Cell(20,6,'Precio',1,1,'C',1);


	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetX(20);
		$pdf->Cell(20,6,$row['numero'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['marca']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['disponibles']),1,0,'C');
		$pdf->Cell(19,6,utf8_decode($row['estante']),1,0,'C');
		$pdf->Cell(14,6,utf8_decode($row['piso']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['precio']),1,1,'C');
	}
	$pdf->Output();
}
?>
