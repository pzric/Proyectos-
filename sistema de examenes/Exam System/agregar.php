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
    <form class="cua" method="POST" action="agregar.php">
      <table>
        <tr>
          <td><label for="name">Nombre</label></td>
          <td><label for="name">Apellido paterno</label></td>
          <td><label for="name">Apellido materno</label><br></td>
        </tr>
        <tr>
          <td><input type="text" name="nombre"></td>
          <td><input type="text" name="apellido1"></td>
          <td><input type="text" name="apellido2"></td>
        </tr>
        <tr>
          <td><label>Fecha de nacimiento</label></td>
          <td><label for="birthdate">Correo</label></td>
          <td></td>
        </tr>
        <tr>
          <td><input type="date" name="fecha"></td>
          <td><input type="text" name="correo"></td>
          <td></td>
        </tr>
        <tr>
          <td><label for="user">Nombre de usuario</label></td>
          <td><label for="password">Contraseña</label></td>
          <td><label for="age">Rol:</label></td>
        </tr>
        <tr>
          <td><input type="text" name="user"></td>
          <td><input type="password" name="password"></td>
          <td><select name="rol">
            <option value="1">Maestro</option>
            <option value="0">Alumno</option>
          </select></td>
        </tr>
      </table><br>
      <button class="bot1" type="submit" name="submit-register">Añadir usuario</button>
    </form>
  </center></body>
</html>
