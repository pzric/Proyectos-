<center><font size=+2 color="red">POR AGOTARSE:</font>
<?php
$result=mysqli_query($link,"select * from agregar where disponibles<10 ORDER BY disponibles ASC");
echo "<table border=+3>";
echo "<th>NUMERO";
echo "<th>NOMBRE";
echo "<th>MARCA";
echo "<th>DISPONIBLES<tr>";

while ($extraido=mysqli_fetch_array($result))
{
  echo "<td>",$extraido['numero'];
  echo "<td>",$extraido['nombre'];
  echo "<td>",$extraido['marca'];
  echo "<td>",$extraido['disponibles'];
  echo "</tr>";
}
echo "</table>";
?></CENTER>
