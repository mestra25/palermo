<?php

  require_once("../Modelo/DAO/ProveedorDAO.php");

   $objproveedor = new proveedor();
   $ProveedorDao = new proveedorDao;
   $nit = $_POST["nit"];

    
	
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