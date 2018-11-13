<link rel="stylesheet" href="css/bootstrap.min.css"><br>
<?php
extract($_GET);
require("connect_db2.php");
$sql=("SELECT * FROM $id2");
$query=mysqli_query($mysqli,$sql);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Pregunta";
echo "<th scope='col'>Inciso a";
echo "<th scope='col'>Inciso b";
echo "<th scope='col'>Inciso c";
echo "<th scope='col'>Inciso d";
echo "<th scope='col'>Respuesta";
echo "<td scope='col'>";
echo "<td scope='col'></tr></thead>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tbody><tr><td>",$extraido[1];
  echo "<td>",$extraido[2];
  echo "<td>",$extraido[3];
  echo "<td>",$extraido[4];
  echo "<td>",$extraido[5];
  echo "<td>",$extraido[6];
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
