<?php

  require_once("../Modelo/DAO/ProductoDAO.php");

   $objproducto = new producto();
   $productoDao = new ProductoDao;
    
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

?>