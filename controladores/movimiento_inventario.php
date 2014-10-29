<?php

  require_once("../Modelo/DAO/movimiento_inventarioDAO.php");

   $objmovimiento_inventario = new movimiento_inventario();
   $movimiento_inventarioDao = new movimiento_inventarioDao;

    if ($_GET['action'] =='GuardarUsuario'){
        $id_producto=$_POST['id_producto'];
        $id_usuario=$_POST['id_usuario'];
        $cantidad=$_POST['reserva'];

require_once("../modelo/conexion.php");
$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM producto WHERE id_producto="'.$id_producto.'"');
$consulta->execute();
$registro = $consulta;

foreach ($consulta as $registro) {
$reserva=$registro['reserva'];
$existencia=$registro['existencia'];


$tem=$existencia-$reserva;

if ($tem>=$cantidad) {

    $objmovimiento_inventario->setusuario($id_usuario);
    $objmovimiento_inventario->setcodigo($id_producto);
	$objmovimiento_inventario->setcantidad($cantidad);
    $objmovimiento_inventario->setv_costo($registro['v_costo']);

    $movimiento_inventarioDao->guardarusuario($objmovimiento_inventario);

}else{
    echo "      <script language='JavaScript'> 
                alert('No hay suficiente material para la reserva el maximo que puede reservar es: ".$tem."'); 
                window.location='../vista/inventario.php'
                </script>";
}
}
}    


if ($_GET['action'] =='Reservar'){

require_once("../modelo/conexion.php");
$id=$_POST['id_producto'];
$res=$_POST['reserva'];

$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM movimiento_inventario WHERE id_movimiento_inventario = "'.$id.'"' );
$consulta->execute();
$registro = $consulta;

foreach ($consulta as $registro) {
$reserva=$registro['reserva'];
$existencia=$registro['existencia'];
}

$tem=$res+$reserva;

if ($existencia>$tem) {

$objmovimiento_inventario->setIdmovimiento_inventario($id);
$objmovimiento_inventario->setReserva($tem);
$movimiento_inventarioDao->reservar($objmovimiento_inventario);

}else{

    $aux=$existencia-$reserva;
    echo "      <script language='JavaScript'> 
                alert('No hay suficiente material para la reserva el maximo que puede reservar es: ".$aux."'); 
                window.location='../vista/inventario.php'
                </script>";
}
$conexion=null;

}

?>