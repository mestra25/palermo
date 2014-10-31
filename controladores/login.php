<?php
require_once '../modelo/conexion.php';




$ced=$_POST["cedula"];
$pass=$_POST["password"];
$encpass=md5("$pass");
$tem=md5("MAFE");
echo $encpass;
echo "     ";
echo $tem;

if ($pass = $tem) {

	session_start();
	$_SESSION['admin']="si";			

	
	header("location:../vista/index.html");

	
}else {
require_once '../modelo/conexion.php';
	
$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM usuario  WHERE cedula ="'.$ced.'"' );
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;

if ($encpass==$registro['password']) {
			
		
		session_start();
		
		$_SESSION['usuario_normal']="si";
		$_SESSION['id_usuario']=$data['id'];
		$_SESSION['nombre']=$data['nombre'];
		$_SESSION['apellido']=$data['apellido'];
		$_SESSION['identificacion']=$data['identificacion'];
		$_SESSION['direccion']=$data['direccion'];
		$_SESSION['telefono']=$data['telefono'];


		header("location:../vista/rol_usuario.php");
		

		
	}
}  

