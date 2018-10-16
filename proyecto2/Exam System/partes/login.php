<?php
require_once 'inc/conexion2.php';
if (isset($_POST['login'])){
  $log_user= $_POST['username'];
  $log_password= $_POST['password'];
  $sql= "SELECT * FROM users WHERE username = '$log_user'";
  $result = $conexion->query($sql);
  if ($result->num_rows > 0){
  $row= $result->fetch_array(MYSQLI_ASSOC);
    if(password_verify($log_password, $row['password'])){
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $log_user;
      $_SESSION['password'] = $log_password;
      header("LOCATION: ./panel");
    }
    else{
      $error= "Contraseña incorrecta";
    }
  }
  else{
    $error="Usuario inexistente";
  }
}
 ?>
