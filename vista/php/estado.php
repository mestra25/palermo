<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta_6 = $conexion->prepare('SHOW TABLE STATUS LIKE "producto"');
$consulta_6->execute();
$registro_6 = $consulta_6->fetch();

?>