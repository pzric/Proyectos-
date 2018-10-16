<?php
include 'partes/conexion.php';
if($_POST){
  $num=$_POST['numero'];
  $nom=$_POST['nombre'];
  $mar=$_POST['marca'];
  $dis=$_POST['disponibles'];
  $est=$_POST['estante'];
  $pis=$_POST['piso'];
  $prec=$_POST['precio'];
  mysqli_query($link,"insert into agregar value('$num','$nom','$mar','$dis','$est','$pis','$prec')");
  mysqli_close($link);
  echo "<center><div class='alert alert-success'>Registro completado</div></center>";
}
?>
