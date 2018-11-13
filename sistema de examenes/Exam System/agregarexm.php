<?php
include 'partes/barra.php';
include 'partes/agregarb.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body><center>
    <form class="cua" method="POST" action="partes/crearexm.php">
      <table>
        <tr>
          <td><font size=+3><label>Nombre del examen:</label></font></td>
          <td></td>
        </tr>
        <tr>
          <td><input class="nom" type="text" name="nombrexm"></td>
          <td></td>
        </tr>
      </table><br>
      <button class="bot1" type="submit" name="submit-register">CREAR</button>
    </form>
  </center></body>
</html>
