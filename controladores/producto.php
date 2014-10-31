<?php

  require_once("../Modelo/DAO/ProductoDAO.php");

   $objproducto = new producto();
   $productoDao = new ProductoDao;

    if ($_GET['action'] =='Guardar'){

	$objproducto->setIdCategoria($_POST['id_categoria']);
    $objproducto->setIdSubcategoria($_POST['id_subcategoria']);
    $objproducto->setIdproveedor($_POST['id_proveedor']);
    $objproducto->setCodigo($_POST['codigo']);
    $objproducto->setDescripcion($_POST['descripcion']);
    $objproducto->setVcosto($_POST['v_costo']);
    $objproducto->setVenta1($_POST['venta_1']);
    $objproducto->setVenta2($_POST['venta_2']);
    $objproducto->setVenta3($_POST['venta_3']);
    $objproducto->setVenta4($_POST['venta_4']);
    $objproducto->setPrecutil($_POST['p_utilidad']);
    $objproducto->setStockmin($_POST['stock_min']);
    $objproducto->setStockmax($_POST['stock_max']);
    $objproducto->setExistencia($_POST['existencia']);
    $objproducto->setMedidad($_POST['medida']);
    $objproducto->setPorcdescuento($_POST['p_descuento']);
    $objproducto->setObservaciones($_POST['observacion']);
    $objproducto->setCreadofec($_POST['fcreado']);
    $objproducto->setModificado($_POST['fmodificado']);

    $productoDao->guardar($objproducto);
}

if ($_GET['action'] == 'Eliminar'){

    $objproducto->setidproducto($_GET['id_producto']);
    
   $productoDao->Eliminar($objproducto);

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
$aux=$existencia-$reserva;
$tem=$res+$reserva;

if ($existencia>=$tem) {

$objproducto->setIdProducto($id_producto);
$objproducto->setReserva($tem);
$productoDao->reservar($objproducto);

}else{
 
    echo "      <script language='JavaScript'> 
                alert('No hay suficiente material para la reserva el maximo que puede reservar es: ".$aux."'); 
                window.location='../vista/inventario.php'
                </script>";
}
$conexion=null;

}

?>