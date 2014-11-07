<?php

require_once("../Modelo/DAO/movimiento_inventarioDAO.php");

$objmovimiento_inventario = new movimiento_inventario();
$movimiento_inventarioDao = new movimiento_inventarioDao;

if ($_GET['action'] =='GuardarUsuario'){

    $usuario=$_POST['usuario'];
    $cliente=$_POST['cliente'];
    $id_producto=$_POST['id_producto'];
    $cantidad=$_POST['reserva'];
    $estado="en espera";

    require_once("../modelo/conexion.php");
    $conexion = new conexion();
    $consulta = $conexion->prepare('SELECT * FROM producto WHERE id_producto="'.$id_producto.'"');
    $consulta->execute();
    $registro = $consulta;

    foreach ($consulta as $registro) {
        $reserva=$registro['reserva'];
        $existencia=$registro['existencia'];
    }

        

        if ($existencia>=$cantidad) {

            $objmovimiento_inventario->setcliente($cliente);
            $objmovimiento_inventario->setusuario($usuario);
            $objmovimiento_inventario->setcodigo($id_producto);
            $objmovimiento_inventario->setcantidad($cantidad);
            $objmovimiento_inventario->setestado($estado);
            $objmovimiento_inventario->setv_costo($registro['v_costo']);

            $movimiento_inventarioDao->guardarusuario($objmovimiento_inventario);

        }else{
            echo "<script language='JavaScript'> 
            alert('No hay suficiente material para la reserva el maximo que puede reservar es: ".$existencia."'); 
            </script>";
        }
}    

if ($_GET['action'] =='Confirmar'){

    $codigo=$_POST['codigo'];
    $estado="aprobado";

    $objmovimiento_inventario->setcodigo($codigo);
    $objmovimiento_inventario->setestado($estado);
    $movimiento_inventarioDao->confirmar($objmovimiento_inventario);
   
}

if ($_GET['action'] =='Movimiento'){

    $codigo=$_POST['id_producto'];
    $usuario=$_POST['id_usuario'];
    $cantidad=$_POST['ingresa'];
    $tip_mov="Entrada";

    $objmovimiento_inventario->setCodigo($codigo);
    $objmovimiento_inventario->setusuario($usuario);
    $objmovimiento_inventario->setcantidad($cantidad);
    $objmovimiento_inventario->settip_mov($tip_mov);
    $movimiento_inventarioDao->movimiento($objmovimiento_inventario);
   
}



if ($_GET['action'] =='Rechazar'){

    $codigo=$_POST['codigo'];
    $estado="rechazado";
    $objmovimiento_inventario->setcodigo($codigo);
    $objmovimiento_inventario->setestado($estado);
    $movimiento_inventarioDao->rechazar($objmovimiento_inventario);
}

if ($_GET['action'] =='Reservar'){

    require_once("../modelo/conexion.php");
    $id_producto=$_POST['id_producto'];
    $res=$_POST['reserva'];

    $conexion = new conexion();
    $consulta = $conexion->prepare('SELECT * FROM producto WHERE id_producto = "'.$id_producto.'"' );
    $consulta->execute();
    $registro = $consulta;

    foreach ($consulta as $registro) {
        $reserva=$registro['reserva'];
        $existencia=$registro['existencia'];
    }

    $tem=$res+$reserva;

    if ($existencia>=$tem) {

        $objmovimiento_inventario->setCodigo($id_producto);
        $objmovimiento_inventario->setReserva($tem);
        $movimiento_inventarioDao->confirmar($objmovimiento_inventario);

    }
    $conexion=null;

}

?>