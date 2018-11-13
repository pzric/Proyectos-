<?php include "partes/barra.php" ?>
<?php
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
extract($_GET);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body>
    <h1>Preguntas de: <?php echo $id2?></h1>

    </form><br><br>
    <?php echo "<a href='agregarp.php?id=$id2'><img class='icono' src='img/agregar.jpg' high=40 width=40></a>";
     include 'partes/preguntas.php'?>
  </body>
</html>
