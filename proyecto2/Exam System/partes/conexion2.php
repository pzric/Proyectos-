<?php
// Conectando, seleccionando la base de datos

$host_db = 'localhost';
$user_db = 'root';
$pass_db = '';
$db_name = 'sistema1';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
	die('La conexion falló: ' . $conexion->connect_error);
}
?>
