<?php
require_once '../modelo/conexion.php';

$ced=$_POST["cedula"];
$pass=$_POST["password"];
$encpass=md5("$pass");
$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM usuario  WHERE cedula ="'.$ced.'"' );
$consulta->execute();
$registro = $consulta->fetch();
$conexion=null;


if ($registro['password']==$encpass && $registro['rol']=="administrador") {
	
	session_start();
	$_SESSION['administrador']="si";
	$_SESSION['cedula']=$ced;
	header("location:../vista/index.html");
	
}

if ($registro['password']!=$encpass && $registro['rol']=="administrador") {
	
echo "<script language='javascript'> 
     alert('Usuario y/o Password Incorrectos');
     var pagina='../vista/login.html';
    location.href=pagina;
   </script>"; 
	
}


if ($registro['password']==$encpass && $registro['rol']=="usuario") {
	
	session_start();
	$_SESSION['usuario']="si";
	$_SESSION['cedula_usuario']=$registro['cedula'];
	header("location: ../vista/rol_usuario.php");
	
}

if ($registro['password']!=$encpass && $registro['rol']=="usuario") {
	
echo "<script language='javascript'> 
     alert('Usuario y/o Password Incorrectos');
     var pagina='../vista/login.html';
    location.href=pagina;
   </script>"; 
	
}

if ($registro['rol']!="usuario" && $registro['rol']!="administrador"){
echo "<script language='javascript'> 
     alert('Usuario y/o Password Incorrectos');
     var pagina='../vista/login.html';
    location.href=pagina;
   </script>";  
}



?>

