<?php 
require_once("../../modelo/conexion.php");
$id_producto=$_POST['id_producto'];
$conexion = new conexion();
$consulta_1 = $conexion->prepare('SELECT * FROM producto WHERE id_producto="'.$id_producto.'"');
$consulta_1->execute();
$registro_1 = $consulta_1->fetch();
echo json_encode($registro_1['existencia']);
$conexion=null;
?>