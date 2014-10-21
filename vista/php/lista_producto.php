<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM producto' );
$consulta->execute();
$registro = $consulta;

?>