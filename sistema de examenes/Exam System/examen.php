<?php include "partes/barra.php"; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo4.css">
<?php
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
extract($_GET);
require("partes/connect_db2.php");
$sql=("SELECT * FROM $id");
$query=mysqli_query($mysqli,$sql);
$i=1;
while ($extraido=mysqli_fetch_array($query)){
  echo "<br><center><table>";
  echo "<tr>";
    echo "<td colspan='2'>Pregunta $i</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td colspan='2'><textarea class='pregunta' type='text' name='pregunta' disabled='disabled'>",$extraido[1],"</textarea></td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><input type='radio' name='c' value='a'>",$extraido[2],"</td>";
    echo "<td><input type='radio' name='c' value='b'>",$extraido[3],"</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><input type='radio' name='c' value='c'>",$extraido[4],"</input></td>";
    echo "<td><input type='radio' name='d' value='d'>",$extraido[5],"</td>";
  echo "</tr>";
  echo "</table>";
  $i=$i+1;
  }
?>
<br><form action="#">
  <button class="bot3" type="submit" name="submit-register" disabled="disabled">Terminar</button>
</form><br></body>
