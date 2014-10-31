<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM categoria WHERE id_categoria ="'.$row['id_categoria'].'"');
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;
?>