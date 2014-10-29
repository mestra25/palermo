<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();
$consulta_1 = $conexion->prepare('SELECT * FROM producto WHERE id_producto="'.$id_producto.'"');
$consulta_1->execute();
$registro_1 = $consulta_1->fetch();

$conexion=null;
?>