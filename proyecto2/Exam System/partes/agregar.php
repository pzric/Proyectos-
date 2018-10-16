<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo3.css">
    <title></title>
  </head>
  <body>
    <form method="POST" action="panel">
        <label for="name">Nombre</label>
        <input type="text" name="name" placeholder="Nombre">
        <label for="username">Nombre de usuario</label>
        <input type="text" name="username" placeholder="Nombre de usuario">
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña">
        <label for="password_confirm">Confirmar contraseña</label>
        <input type="password" name="password_confirm" placeholder="Confirmar contraseña">
        <label for="birthdate">Fecha de nacimiento</label>
        <input type="date" name="birthdate" placeholder="Fecha de nacimiento">
        <label for="age">Rol:</label>
        <select>
          <option value="1">Maestro</option>
          <option value="0">Alumno</option>
        </select>
        <button type="submit" name="submit-register">Añadir usuario</button>
    </form>
  </body>
</html>
