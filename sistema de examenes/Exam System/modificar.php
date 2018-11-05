<?php
include 'partes/barra.php';
include 'partes/agregarb.php';
extract($_GET);
require("partes/connect_db.php");
$sql="SELECT * FROM usuarios WHERE id=$id";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row($ressql)){
  $id=$row[0];
  $nom=$row[1];
  $ape1=$row[2];
  $ape2=$row[3];
  $fec=$row[4];
  $cor=$row[5];
  $user=$row[6];
  $cont=$row[7];
  $rol=$row[8];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body><center>
    <form class="cua" method="POST" action="partes/actualizarb.php">

      <table>
        <tr>
          <td><label for="name">Nombre</label></td>
          <td><label for="name">Apellido paterno</label></td>
          <td><label for="name">Apellido materno</label><br></td>
        </tr>
        <tr>
          <input class="invi" type="text" name="id" value="<?php echo $id ?>">
          <td><input type="text" name="nombre" value="<?php echo $nom ?>"></td>
          <td><input type="text" name="apellido1" value="<?php echo $ape1 ?>"></td>
          <td><input type="text" name="apellido2" value="<?php echo $ape2 ?>"></td>
        </tr>
        <tr>
          <td><label>Fecha de nacimiento</label></td>
          <td><label for="birthdate">Correo</label></td>
          <td></td>
        </tr>
        <tr>
          <td><input type="date" name="fecha" value="<?php echo $fec ?>"></td>
          <td><input type="text" name="correo" value="<?php echo $cor ?>"></td>
          <td></td>
        </tr>
        <tr>
          <td><label for="user">Nombre de usuario</label></td>
          <td><label for="password">Contraseña</label></td>
          <td><label for="age">Rol:</label></td>
        </tr>
        <tr>
          <td><input type="text" name="user" value="<?php echo $user ?>"></td>
          <td><input type="password" name="password" value="<?php echo $cont ?>"></td>
          <td><select name="rol">
            <option value="1">Maestro</option>
            <option value="0">Alumno</option>
          </select></td>
        </tr>
      </table><br>
      <button class="bot1" type="submit" name="submit-register">Guardar</button>
    </form>
  </center></body>
</html>
