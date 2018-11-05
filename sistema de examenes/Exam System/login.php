<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="widht=divice-widht, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
  </head>
  <body><center>
    <form action="partes/validar.php" method="post">
    <div class="form-group">
      <label>Usuario</label>
      <p><input type="text" class="caja1" name="user" placeholder="Usuario"></p>
    </div>
    <div class="form-group">
      <label> Contraseña</label><br>
      <p><input type="password" class="caja1" name="password" placeholder="Contraseña"></p>
    </div>
      <p><button type="submit" class="bot">Iniciar Sección</button></p>
    </form>
  </body>
</html>
