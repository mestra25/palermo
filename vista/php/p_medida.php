<?php 
require_once("../modelo/conexion.php");
$conexion=null;
$conexion = new conexion();
$consulta_5 = $conexion->prepare('SELECT * FROM medida where id_medida="'.$id_medi.'"');
$consulta_5->execute();
$registro_5 = $consulta_5->fetch();
$conexion=null;
?>