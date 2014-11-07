<?php 
require_once("../modelo/conexion.php");
$conexion=null;
$conexion = new conexion();
$consulta_6 = $conexion->prepare('SELECT * FROM ubicacion where id_ubicacion="'.$id_ubi.'"');
$consulta_6->execute();
$registro_6 = $consulta_6->fetch();
$conexion=null;
?>