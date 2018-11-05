<?php include "partes/barra.php" ?>
<?php
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Bienvenido</h1>
  </body>
</html>
