<?php
$fec=date ('d/m/Y');
$ac='agregado';
include 'partes/conexion.php';
if($_POST){
  $num=$_POST['numero'];
  $nom=$_POST['nombre'];
  $mar=$_POST['marca'];
  mysqli_query($link,"insert into actividad value('$num','$nom','$mar','$ac','$fec')");
  mysqli_close($link);
}
 ?>
