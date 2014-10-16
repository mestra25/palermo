<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM categoria' );
$consulta->execute();
$registro = mysql_fetch_array($consulta);

$conexion = null;

?>