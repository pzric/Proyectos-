<?php
extract($_POST);
	require("connect_db.php");
	$sentencia="update usuarios set nombre='$nom', apellido1='$ape1', apellido2='$ape2', fecha='$fec', correo='$cor', usuario='$user', contrasena='$cont', rol='$rol' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';

		echo "<script>location.href='../usuarios.php'</script>";
	}
  else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';

		echo "<script>location.href='../usuarios.php'</script>";


	}
?>
