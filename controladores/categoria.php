<?php

  require_once("../Modelo/DAO/categoriaDAO.php");

   $objcategoria = new categoria();
   $categoriaDAO = new categoriaDAO();

   if($_GET['action'] =='Guardar'){
    
    
	 $objcategoria->setdescripcion($_POST['descripcion']);
    $objcategoria->setobservacion($_POST['observacion']);
    $objcategoria->setfcreado($_POST['fcreado']);
    $objcategoria->setfmodificado($_POST['fmodificado']);
    
    $categoriaDAO->guardar($objcategoria);
}

if($_GET['action'] =='Editar'){
    
    
	 $objcategoria->setdescripcion($_POST['descripcion']);
    $objcategoria->setobservacion($_POST['observacion']);
    $objcategoria->setfcreado($_POST['fcreado']);
    $objcategoria->setfmodificado($_POST['fmodificado']);
    
    $categoriaDAO->modificar($objcategoria);
}
if ($_GET['action'] == 'Eliminar'){

    $objcategoria->setNit($_GET['id_categoria']);
    
   $clienteDAO->Eliminar($objcliente);

  }
?>