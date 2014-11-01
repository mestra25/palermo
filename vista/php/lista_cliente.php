<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM cliente');
$consulta->execute();
$registro = $consulta;
$conexion=null;
?>