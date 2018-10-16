<center><br>
<?php
include 'partes/conexion.php';
$result=mysqli_query($link,"select * from usuarios");
echo "<table border=+3 width=70%>";
echo "<th>Nombre";
echo "<th>Apellido paterno";
echo "<th>Apellido materno";
echo "<th>Fecha de nacimineto";
echo "<th>Correo";
echo "<th>Rol<tr>";

while ($extraido=mysqli_fetch_array($result))
{
  echo "<td>",$extraido['nombre'];
  echo "<td>",$extraido['apellido1'];
  echo "<td>",$extraido['apellido2'];
  echo "<td>",$extraido['fecha'];
  echo "<td>",$extraido['correo'];
  if ($extraido['rol']==1) {
    echo "<td>Maestro";
  }
  if ($extraido['rol']==0) {
    echo "<td>Alumno";
  }
  echo "<th><a href=''>MODIFICAR</a><tr>";
  echo "</tr>";
}
echo "</table>";
?></CENTER>
