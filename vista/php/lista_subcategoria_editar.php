<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM subcategoria  WHERE id_subcategoria ="'.$row['id_subcategoria'].'"' );
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;
?>