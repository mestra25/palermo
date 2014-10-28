<?php 
require_once("../modelo/conexion.php");
$conexion=null;
$conexion = new conexion();
$consulta_1 = $conexion->prepare('SELECT * FROM categoria where id_categoria="'.$id_cat.'"');
$consulta_1->execute();
$registro_1 = $consulta_1->fetch();
$conexion=null;
?>