<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM subcategoria' );
$consulta->execute();
$registro = $consulta->fetch();

?>