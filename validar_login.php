<?php


$usuario=$_POST["usuario"];

$pass=$_POST["pass"];


if ($usuario=="administrador" && $pass=="mestra") {
	
	session_start();
	$_SESSION['admin']="si";			

	
	header("location:administrador.php");

	
}else {

	require("conexion.php");

	$query=mysql_query('SELECT * FROM registro WHERE usuario="'.$usuario.'"');
	$data=mysql_fetch_array($query);
	$pass=md5("$pass");
	if ($data['pass']==$pass)
	{			
		
		session_start();
		
		$_SESSION['usuario_normal']="si";
		$_SESSION['id_usuario']=$data['id'];
		$_SESSION['nombre']=$data['nombre'];
		$_SESSION['apellido']=$data['apellido'];
		$_SESSION['identificacion']=$data['identificacion'];
		$_SESSION['direccion']=$data['direccion'];
		$_SESSION['telefono']=$data['telefono'];


		header("location:usu_nor.php");
		

		
	}else{

		header("location:login_invalido.php");
	}
}  






