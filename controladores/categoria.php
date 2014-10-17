<?php

  require_once("../Modelo/DAO/categoriaDAO.php");

   $objcategoria = new categoria();
   $categoriaDAO = new categoriaDAO;
    
	  $objcategoria->setdescripcion($_POST['descripcion']);
    $objcategoria->setobservacion($_POST['observacion']);
    $objcategoria->setfcreado($_POST['fcreado']);
    $objcategoria->setfmodificado($_POST['fmodificado']);
    
    $categoriaDAO->guardar($objcategoria);

?>