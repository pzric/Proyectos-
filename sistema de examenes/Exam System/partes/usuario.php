<link rel="stylesheet" href="css/bootstrap.min.css"><br>
<?php
require("connect_db.php");
$sql=("SELECT * FROM usuarios");
$query=mysqli_query($mysqli,$sql);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Nombre";
echo "<th scope='col'>Apellido paterno";
echo "<th scope='col'>Apellido materno";
echo "<th scope='col'>Fecha de nacimineto";
echo "<th scope='col'>Correo";
echo "<th scope='col'>Rol";
echo "<td scope='col'>";
echo "<td scope='col'></tr></thead>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tbody><tr><td>",$extraido['nombre'];
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
  echo "</tr></tbody>";
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
