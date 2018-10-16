<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg">
    <a class="navbar-brand" href="panel.php">
      <img src="img/es.jpg" width="50" height="35" class="d-inline-block align-top" alt="">
    </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="usuarios.php">Usuarios<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="exam.php">Examenes<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="result.php">Resultados<span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline" action="index.php">
      <button class="bot" type="submit">Logout</button>
    </form>
  </div>
</nav>
  </body>
</html>
