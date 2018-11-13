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
  echo "<td><a href='examen.php?id=$extraido[0]'><img src='img/realizar.jpg' high=30 width=30><br>";
  echo "<td>";
  echo "</tr></tbody>";
}
echo "</table>";
?>
