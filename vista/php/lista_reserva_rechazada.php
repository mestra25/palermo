<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM movimiento_inventario WHERE estado="rechazado"');
$consulta->execute();
$registro = $consulta;

$conexion=null;
?>