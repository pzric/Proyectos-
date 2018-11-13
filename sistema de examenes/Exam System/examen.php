<link rel="stylesheet" href="css/bootstrap.min.css"><center>
  <link rel="stylesheet" href="css/estilo3.css">
<?php
include "partes/barra.php";
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
extract($_GET);
require("partes/connect_db2.php");
$sql=("SELECT * FROM $id");
$query=mysqli_query($mysqli,$sql);
echo "<table>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tr>";
    echo "<td><label>Pregunta</label></td>";
    echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td colspan='2'><textarea class='pregunta' type='text' name='pregunta'>",$extraido[1],"</textarea></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><label type='text'>Inciso a</label></td>";
    echo "<td><label type='text'>Inciso b</label></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><input type='radio' name='a' value='a'>$extraido[2]</td>";
    echo "<td><input type='radio' name='b' value='b'>",$extraido[3],"</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><label type='text'>Inciso c</label></td>";
    echo "<td><label type='text'>Inciso d</label></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><input type='radio' name='c' value='c'>",$extraido[4],"</td>";
    echo "<td><input type='radio' name='d' value='d'>",$extraido[5],"</td>";
  echo "</tr>";
  }
echo "</table>";
?>
