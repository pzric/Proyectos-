<?php
extract($_GET);
require("connect_db2.php");
if($_POST){
  $id=$_POST['tabla'];
  $nom=$_POST['pregunta'];
  $ape1=$_POST['a'];
  $ape2=$_POST['b'];
  $fec=$_POST['c'];
  $cor=$_POST['d'];
  $user=$_POST['respuesta'];
  mysqli_query($mysqli,"INSERT INTO $id VALUES('','$nom','$ape1','$ape2','$fec','$cor','$user')");
  echo '<script>alert("AÑADIDO CON EXITO")</script> ';
  echo "<script>location.href='../verexm.php?id2=$id'</script>";
}
?>
