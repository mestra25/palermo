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
    
   $objcategoria->setid_categoria($_POST['id_categoria']); 
	 $objcategoria->setdescripcion($_POST['descripcion']);
    $objcategoria->setobservacion($_POST['observacion']);
    $objcategoria->setfcreado($_POST['fcreado']);
    $objcategoria->setfmodificado($_POST['fmodificado']);
    
    $categoriaDAO->modificar($objcategoria);
}
if ($_GET['action'] == 'Eliminar'){

    $objcategoria->setid_categoria($_GET['id_categoria']);
    
   $categoriaDAO->Eliminar($objcategoria);

  }
?>