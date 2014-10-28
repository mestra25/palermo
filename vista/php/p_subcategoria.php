<?php 
require_once("../modelo/conexion.php");
$conexion=null;
$conexion = new conexion();
$consulta_2 = $conexion->prepare('SELECT * FROM subcategoria where id_subcategoria="'.$id_sub.'"');
$consulta_2->execute();
$registro_2 = $consulta_2->fetch();
?>