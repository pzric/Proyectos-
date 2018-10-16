<link rel="stylesheet" href="css/estilos.css">
<ul>
  <?php $result=mysqli_query($link,"SELECT * FROM notas");$extraido=mysqli_fetch_array($result);?>
  <form action="inicio.php"  method="POST">
  <li class="cont"><a class="not"><textarea name="titulo" class="are1" placeholder="Titulo" maxlength="15"><?php echo $extraido['titulo']?></textarea><hr>
  <p class="par"><textarea class="are2" name="contenido" placeholder="Contenido" maxlength="200"><?php echo $extraido['contenido']?></textarea>
  <input class="bot1" type="submit" value="Guardar"></p></a></li>


  <?php $result=mysqli_query($link,"SELECT * FROM notas1");$extraido=mysqli_fetch_array($result);?>
  <form action="inicio.php"  method="POST">
  <li class="cont"><a class="not"><textarea name="titulo1" class="are1" placeholder="Titulo" maxlength="15"><?php echo $extraido['titulo']?></textarea><hr>
  <p class="par"><textarea class="are2" name="contenido1" placeholder="Contenido" maxlength="200"><?php echo $extraido['contenido']?></textarea>
  <input class="bot1" type="submit" value="Guardar"></p></a></li>


  <?php $result=mysqli_query($link,"SELECT * FROM notas2");$extraido=mysqli_fetch_array($result);?>
  <form action="inicio.php"  method="POST">
  <li class="cont"><a class="not"><textarea name="titulo2" class="are1" placeholder="Titulo" maxlength="15"><?php echo $extraido['titulo']?></textarea><hr>
  <p class="par"><textarea class="are2" name="contenido2" placeholder="Contenido" maxlength="200"><?php echo $extraido['contenido']?></textarea>
  <input class="bot1" type="submit" value="Guardar"></p></a></li>
</ul>
