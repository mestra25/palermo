<?php

  require_once("../modelo/DAO/subcategoriaDAO.php");

   $objsubcategoria = new subcategoria();
   $subcategoriaDAO = new subcategoriaDAO;
	
	   if($_GET['action'] =='Guardar'){

    $objsubcategoria->setdescripcion($_POST['descripcion']);
    $objsubcategoria->setobservacion($_POST['observacion']);
    $objsubcategoria->setfcreado($_POST['fcreado']);
    $objsubcategoria->setfmodificado($_POST['fmodificado']);

    $subcategoriaDAO->guardar($objsubcategoria);
}

if($_GET['action'] =='Editar'){

    $objcategoria->setid_subcategoria($_POST['id_subcategoria']);
	  $objcategoria->setdescripcion($_POST['descripcion']);
    $objcategoria->setobservacion($_POST['observacion']);
    $objcategoria->setfmodificado($_POST['fmodificado']);
    
    $subcategoriaDAO->modificar($objsubcategoria);
}
?>