<?php
include 'partes/conexion.php';
if($_POST){
  $orden1=$_POST['orden1'];
  $orden2=$_POST['orden2'];
  if(($orden1 && $orden2)==0){
    echo "<div class='alert alert-danger'>¡ERROR! Selecciona alguna opcion</div>";
  }
  else{
    $result=mysqli_query($link,"select * from agregar ORDER BY $orden1 $orden2");
    echo "<table border=+3>";
    echo "<th>NUMERO";
    echo "<th>NOMBRE";
    echo "<th>MARCA";
    echo "<th>DISPONIBLES";
    echo "<th>ESTANTE";
    echo "<th>PISO";
    echo "<th>PRECIO<tr>";

    while ($extraido=mysqli_fetch_array($result))
    {
      echo "<td>",$extraido['numero'];
      echo "<td>",$extraido['nombre'];
      echo "<td>",$extraido['marca'];
      echo "<td>",$extraido['disponibles'];
      echo "<td>",$extraido['estante'];
      echo "<td>",$extraido['piso'];
      echo "<td>",$extraido['precio'];
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
  }
}
?>
