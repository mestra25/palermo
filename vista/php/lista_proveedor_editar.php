<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM proveedor  WHERE id_proveedor ="'.$row['id_proveedor'].'"' );
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;
?>