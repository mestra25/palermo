<?php
require_once '../modelo/conexion.php';

$ced=$_POST["cedula"];
$pass=$_POST["password"];
$encpass=md5("$pass");
$tem=md5("1234");


$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM usuario  WHERE cedula ="'.$ced.'"' );
$consulta->execute();
$registro = $consulta->fetch();

if ($ced =="adm" && $encpass==$tem && $registro['rol']=="usuario") {
	

	header("location:../vista/rol_usuario.php");

	
}
?>

