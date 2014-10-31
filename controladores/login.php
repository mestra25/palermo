<?php
require_once '/../conexion.php';

  
    $ced = $_POST['cedula'];
    $pw = $_POST['password'];
    $pw_enc = md5($pw);

    $conexion = new conexion();

    $sql = "SELECT cedula FROM usuario WHERE cedula = '".$usr."'
            AND tx_password = '".$pw_enc."' ";  

    $rs = mysql_query($sql,$conexion); 
    if (mysql_num_rows($rs)!=0){ 
 
 session_start(); 
 session_register("autentificado"); 
 $autentificado = "SI"; 
 header ("Location: ../vista/cliente.php"); 
}else { 
 
 header("Location: index.php?errorusuario=si"); 
} 
mysql_free_result($rs); 
mysql_close($conn); 