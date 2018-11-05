<?php
require("connect_db.php");
if($_POST){
  $nom=$_POST['nombre'];
  $ape1=$_POST['apellido1'];
  $ape2=$_POST['apellido2'];
  $fec=$_POST['fecha'];
  $cor=$_POST['correo'];
  $user=$_POST['user'];
  $cont=$_POST['password'];
  $rol=$_POST['rol'];
  mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$nom','$ape1','$ape2','$fec','$cor','$user','$cont','$rol')");
  echo "<center><div class='alert alert-success'>Registro completado</div></center>";
}
?>
