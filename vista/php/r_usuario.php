<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta_1 = $conexion->prepare('SELECT * FROM movimiento_inventario');
$consulta_1->execute();
$registro_1 = $consulta_1;

$conexion=null;
?>