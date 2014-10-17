<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM proveedor' );
$consulta->execute();
$registro = $consulta;

?>