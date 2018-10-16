<form action="partes/generador.php" method="POST">
  Generar PDF:<br>
  Reporte de almacén<br>
<label>Orden:</label>
<select name="orden" class="caja1">
  <option value="numero">Numero</option>
  <option value="nombre">Nombre</option>
  <option value="marca">Marca</option>
  <option value="disponibles">Disponible</option>
  <option value="precio">Precio</option>
</select><input type="submit" value="Generar"></p>
</form>
<form action="partes/generador2.php" method="POST">
Reporte de actividad<br>
<label>Orden:</label>
<select name="orden2" class="caja1">
  <option value="accion">Actividad</option>
  <option value="TO_DATE(NAME_FIELD, 'DD/MM/YY')">Fecha</option>
</select><input type="submit" value="Generar"></p>
