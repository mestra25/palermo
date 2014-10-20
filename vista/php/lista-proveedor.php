<?php 
require_once("../modelo/conexion.php");

$conexion = new conexion();

if (isset($_GET['nit'])){
$consulta = $conexion->prepare('SELECT * FROM proveedor' );
$consulta->execute(array($_GET['nit']));
$registro = $consulta;
if (empty($registro)) {
            $consulta = "No se encontraron resultados !!";
        }
}

?>