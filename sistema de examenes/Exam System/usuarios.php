<?php include "partes/barra.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body>
    <h1>Usuarios</h1>
    <form action="agregar.php">
      <button class="bot2" type="submit" name="submit-register">Agregar</button>
    </form><br><br>
    <?php include 'partes/usuario.php'; ?>
  </body>
</html>
