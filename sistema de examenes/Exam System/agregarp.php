<?php
extract($_GET);
include 'partes/barra.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body><center>
    <form class="cua2" method="POST" action="partes/agregarpre.php">
       <?php echo "<input class='invi' type='text' value='$id' name='tabla'>"?>
      <table>
        <tr>
          <td><label>Pregunta</label></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"><textarea class="pregunta" type="text" name="pregunta"></textarea></td>
        </tr>
        <tr>
          <td><label type="text">Inciso a</label></td>
          <td><label type="text">Inciso b</label></td>
        </tr>
        <tr>
          <td><input type="text" name="a"></td>
          <td><input type="text" name="b"></td>
        </tr>
        <tr>
          <td><label type="text">Inciso c</label></td>
          <td><label type="text">Inciso d</label></td>
        </tr>
        <tr>
          <td><input type="text" name="c"></td>
          <td><input type="text" name="d"></td>
        </tr>
        <tr>
          <td colspan="2"><center><label type="text">Respuesta</label></center></td>
        </tr>
        <tr>
          <td colspan="2"><center><select name="respuesta">
            <option value="a">Inciso a</option>
            <option value="b">Inciso b</option>
            <option value="c">Inciso c</option>
            <option value="d">Inciso d</option>
          </select></td>
        </tr>
      </table><br>
      <button class="bot1" type="submit" name="submit-register">AGREGAR</button>
    </form>
  </center></body>
</html>
