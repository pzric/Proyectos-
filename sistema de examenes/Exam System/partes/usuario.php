<center><br>
<?php
require("connect_db.php");
$sql=("SELECT * FROM usuarios");
$query=mysqli_query($mysqli,$sql);
echo "<table border=+3 width=70%>";
echo "<th>Nombre";
echo "<th>Apellido paterno";
echo "<th>Apellido materno";
echo "<th>Fecha de nacimineto";
echo "<th>Correo";
echo "<th>Rol";
echo "<td>";
echo "<td><tr>";
while ($extraido=mysqli_fetch_array($query)){
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
  echo "<td><a href='modificar.php?id=$extraido[id]'><img src='img/modificar.png' high=20 width=20>";
  echo "<td><a href='partes/usuario.php?id=$extraido[id]&idborrar=2'><img src='img/eliminar.png' high=20 width=20>";
  echo "</tr>";
  }
echo "</table>";

extract($_GET);
if(@$idborrar==2){
  $sqlborrar="DELETE FROM usuarios WHERE id=$id";
	$resborrar=mysqli_query($mysqli,$sqlborrar);
	echo '<script>alert("REGISTRO ELIMINADO")</script>';
	echo "<script>location.href='../usuarios.php'</script>";
}
?>
</CENTER>
