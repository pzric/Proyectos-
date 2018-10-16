<?php
if($_POST){
  $titulo=$_POST['titulo'];
  $cont=$_POST['contenido'];
   mysqli_query($link,"UPDATE notas SET titulo='$titulo', contenido='$cont' ");
  $titulo2=$_POST['titulo1'];
  $cont2=$_POST['contenido1'];
  mysqli_query($link,"UPDATE notas1 SET titulo='$titulo2', contenido='$cont2' ");
  $titulo3=$_POST['titulo2'];
  $cont3=$_POST['contenido2'];
  mysqli_query($link,"UPDATE notas2 SET titulo='$titulo3', contenido='$cont3' ");
 }
?>
