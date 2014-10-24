<?php

  require_once("../Modelo/DAO/ProveedorDAO.php");

   $objproveedor = new proveedor();
   $ProveedorDao = new proveedorDao();

   if ($_GET['action'] =='Guardar'){
    
  
    $objproveedor->setNit($_POST['nit']);
    $objproveedor->setNombreEmpresa($_POST['nombre_empresa']);
    $objproveedor->setDireccion($_POST['direccion']);
    $objproveedor->setTelefono($_POST['telefono']);
    $objproveedor->setEmail($_POST['email']);
    $objproveedor->setWeb($_POST['web']);
    $objproveedor->setContac($_POST['contac']);
    $objproveedor->setReplegal($_POST['replegal']);
    $objproveedor->setcedRep($_POST['cedrep']);
    $objproveedor->setcelRep($_POST['celrep']);

    $ProveedorDao->guardar($objproveedor);

}

if ($_GET['action'] == 'Editar'){

    $objproveedor->setNit($_POST['nit']);
    $objproveedor->setNombreEmpresa($_POST['nombre_empresa']);
    $objproveedor->setDireccion($_POST['direccion']);
    $objproveedor->setTelefono($_POST['telefono']);
    $objproveedor->setEmail($_POST['email']);
    $objproveedor->setWeb($_POST['web']);
    $objproveedor->setContac($_POST['contac']);
    $objproveedor->setReplegal($_POST['replegal']);
    $objproveedor->setcedRep($_POST['cedrep']);
    $objproveedor->setcelRep($_POST['celrep']);

   $ProveedorDao->modificar($objproveedor);

  }

  if ($_GET['action'] == 'Eliminar'){

    $objproveedor->setNit($_GET['nit']);
    
   $ProveedorDao->eliminar($objproveedor);

  }

?>