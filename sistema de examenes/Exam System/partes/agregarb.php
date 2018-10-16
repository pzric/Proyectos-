<?php
include 'partes/conexion.php';
if($_POST){
  $nom=$_POST['nombre'];
  $ape1=$_POST['apellido1'];
  $ape2=$_POST['apellido2'];
  $fec=$_POST['fecha'];
  $cor=$_POST['correo'];
  $user=$_POST['user'];
  $cont=$_POST['password'];
  $rol=$_POST['rol'];
  mysqli_query($link,"insert into usuarios value('$nom','$ape1','$ape2','$fec','$cor','$user','$cont','$rol')");
  mysqli_close($link);
  echo "<center><div class='alert alert-success'>Registro completado</div></center>";
}
?>
