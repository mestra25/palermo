<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM medida WHERE id_medida="'.$row['medida'].'"');
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;
?>