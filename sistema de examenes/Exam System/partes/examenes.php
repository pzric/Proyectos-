<?php
require("connect_db2.php");
$sql=("SHOW FULL TABLES FROM examenes");
$query=mysqli_query($mysqli,$sql);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Nomre del examen";
echo "<td scope='col'>";
echo "<td scope='col'></tr></thead>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tbody><tr><td>",$extraido[0];
  echo "<td><a href='verexm.php?id2=$extraido[0]'><img src='img/modificar.png' high=20 width=20><br>";
  echo "<td><a href='partes/usuario.php?id=$extraido[0]&idborrar=2'><img src='img/eliminar.png' high=20 width=20>";
  echo "</tr></tbody>";
}
echo "</table>";
?>
