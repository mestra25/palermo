<?php 
require_once("../modelo/conexion.php");
$id=$_GET['id_producto'];
$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM producto where id_producto="'.$id.'"');
$consulta->execute();
$registro = $consulta;
foreach ($consulta as $registro) {
	$id_cat=$registro['id_categoria'];
	$id_sub=$registro['id_subcategoria'];
	$id_prove=$registro['id_proveedor'];
	$id_med=$registro['medida'];
}
$consulta_1 = $conexion->prepare('SELECT * FROM categoria where id_categoria="'.$id_cat.'"');
$consulta_1->execute();
$registro_1 = $consulta_1;
foreach ($consulta_1 as $registro_1) {
}
$consulta_2 = $conexion->prepare('SELECT * FROM subcategoria where id_subcategoria="'.$id_sub.'"');
$consulta_2->execute();
$registro_2 = $consulta_2;
foreach ($consulta_2 as $registro_2) {
}
$consulta_3 = $conexion->prepare('SELECT * FROM proveedor where id_proveedor="'.$id_prove.'"');
$consulta_3->execute();
$registro_3 = $consulta_3;
foreach ($consulta_3 as $registro_3) {
}
$consulta_4 = $conexion->prepare('SELECT * FROM medida where id_medida="'.$id_med.'"');
$consulta_4->execute();
$registro_4 = $consulta_4;
foreach ($consulta_4 as $registro_4) {
}

$conexion = new conexion();
$consulta_6 = $conexion->prepare('SELECT * FROM cliente');
$consulta_6->execute();
$registro_6 = $consulta_6;
$conexion=null;
?>