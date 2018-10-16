<?php include 'partes/conexion.php';include 'partes/notasm.php'?>
<meta charset="utf-8"/>
<?php include 'partes/barra.html'?>
  <div class="row">
      <div class="col-md-8">
        <p>
          <?php include 'partes/notas.php'?>
       </p>
      </div>
      <div class="col-md-4">
        <p>
        <?php include 'partes/mantener.php'?>
       </p>
     </div>
  </div>
</div>
  <?php
  mysqli_close($link);
  ?>
