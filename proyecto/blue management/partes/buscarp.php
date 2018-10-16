<?php
echo "<center>";
include 'partes/conexion.php';
if($_POST){
  $bus=$_POST['bus'];
  $val1=$_POST['val1'];
  if(($bus && $val1)==0){
    echo "<div class='alert alert-danger'>¡ERROR! Selecciona alguna opcion</div>";
  }
  elseif(($bus && $val1)!=0){
    echo "<table border=+3>";
    echo "<th>NUMERO";
    echo "<th>NOMBRE";
    echo "<th>MARCA";
    echo "<th>DISPONIBLES";
    echo "<th>ESTANTE";
    echo "<th>PISO";
    echo "<th>PRECIO";
    echo "<th></tr>";
    if($bus=="nombre"){
      $result2=mysqli_query($link,"select * from agregar where $bus LIKE '%$val1%'");
      while (  $extraido=mysqli_fetch_array($result2)){
        echo "<th>",$extraido['numero'];
        echo "<th>",$extraido['nombre'];
        echo "<th>",$extraido['marca'];
        echo "<th>",$extraido['disponibles'];
        echo "<th>",$extraido['estante'];
        echo "<th>",$extraido['piso'];
        echo "<th>",$extraido['precio'];
        echo "<th><a href=''>MODIFICAR</a><tr>";
      }
    }
    elseif($bus=="numero"){
      $result=mysqli_query($link,"select * from agregar where numero=$val1");
      while($row=mysqli_fetch_array($result)){
        echo "<th>",$row['numero'];
        echo "<th>",$row['nombre'];
        echo "<th>",$row['marca'];
        echo "<th>",$row['disponibles'];
        echo "<th>",$row['estante'];
        echo "<th>",$row['piso'];
        echo "<th>",$row['precio'];
        echo "<th><a href=''>MODIFICAR</a><tr>";
      }
    }
  }
}
mysqli_close($link);
?>
