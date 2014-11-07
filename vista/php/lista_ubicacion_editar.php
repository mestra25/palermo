<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM ubicacion WHERE id_ubicacion="'.$row['id_ubicacion'].'"');
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;
?>