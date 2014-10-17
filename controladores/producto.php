<?php

  require_once("../Modelo/DAO/ProductoDAO.php");

   $objproducto = new producto();
   $productoDao = new ProductoDao;
	
    $objproducto->setid_categoria($_POST['id_categoria']);
    $objproducto->setid_subcategoria($_POST['id_subcategoria']);
    $objproducto->setid_proveedor($_POST['id_proveedor']);
    $objproducto->setdescripcion($_POST['descripcion']);
    $objproducto->setv_costo($_POST['v_costo']);
    $objproducto->setventa_1($_POST['venta_1']);
    $objproducto->setventa_2($_POST['venta_2']);
    $objproducto->setventa_3($_POST['venta_3']);
    $objproducto->setventa_4($_POST['venta_4']);
    $objproducto->setp_utilidad($_POST['p_utilidad']);
    $objproducto->setstock_min($_POST['stock_min']);
    $objproducto->setstock_max($_POST['stock_max']);
    $objproducto->setmedida($_POST['medida']);
    $objproducto->setp_descuento($_POST['p_descuento']);
    $objproducto->setobservacion($_POST['observacion']);
    $objproducto->setfcreado($_POST['fcreado']);
    $objproducto->setfmodificado($_POST['fmodificado']);







    $productoDao->guardar($objproducto);

?>