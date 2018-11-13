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
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body>
    <h1>Examenes</h1>
    <?php include 'partes/examenes2.php'; ?>
 </body>
</html>
