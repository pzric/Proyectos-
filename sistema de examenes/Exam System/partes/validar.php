<?php
session_start();
	require("connect_db.php");
	$username=$_POST['user'];
	$pass=$_POST['password'];
  	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE usuario='$username'");
  	if($f=mysqli_fetch_assoc($sql)){
  		if($pass==$f['contrasena']){
				$_SESSION['user']=$f['usuario'];
  			$_SESSION['rol']=$f['rol'];
  			header("Location: ../panel.php");
  		}
			else{
  			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
  			echo "<script>location.href='../login.php'</script>";
  		}
  	}
		else{
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		echo "<script>location.href='../login.php'</script>";
	}
?>
