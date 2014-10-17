<?php

  require_once("../Modelo/DAO/ProductoDAO.php");

   $objproveedor = new producto();
   $ProveedorDao = new ProductoDao;
	
    $objproveedor->setNit($_POST['nit']);
    $objproveedor->setDireccion($_POST['direccion']);
    $objproveedor->setTelefono($_POST['telefono']);
    $objproveedor->setEmail($_POST['email']);
    $objproveedor->setWeb($_POST['web']);
    $objproveedor->setContac($_POST['contac']);
    $objproveedor->setReplegal($_POST['replegal']);
    $objproveedor->setcedRep($_POST['cedrep']);
    $objproveedor->setcelRep($_POST['celrep']);


    $ProveedorDao->guardar($objproveedor);

?>