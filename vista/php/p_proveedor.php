<?php 
require_once("../modelo/conexion.php");
$conexion=null;
$conexion = new conexion();
$consulta_3 = $conexion->prepare('SELECT * FROM proveedor where id_proveedor="'.$id_prove.'"');
$consulta_3->execute();
$registro_3 = $consulta_3->fetch();
$conexion=null;
?>