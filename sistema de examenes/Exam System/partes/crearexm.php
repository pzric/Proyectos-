<?php
require("connect_db2.php");
extract($_POST);
$sql = "CREATE TABLE $nombrexm(
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  pregunta TEXT(100) NOT NULL,
  a TEXT(50) NOT NULL,
  b TEXT(50) NOT NULL,
  c TEXT(50) NOT NULL,
  d TEXT(50) NOT NULL,
  respuesta TEXT(50) NOT NULL
)";
if($mysqli->query($sql) === true){
  echo '<script>alert("EL EXAMEN SE CREO CORRECTAMENTE")</script> ';
	echo "<script>location.href='../exam.php'</script>";
}else {
  echo '<script>alert("ERROR NO SE PUDO CREAR EL EXAMEN")</script> ';
  echo "<script>location.href='../exam.php'</script>";
  //die("error ".$mysqli->error);
}
?>
