<?php

  require_once("../modelo/DAO/subcategoriaDAO.php");

   $objsubcategoria = new subcategoria();
   $subcategoriaDAO = new subcategoriaDAO;
	
    $objsubcategoria->setdescripcion($_POST['descripcion']);
    $objsubcategoria->setobservacion($_POST['observacion']);
    $objsubcategoria->setfcreado($_POST['fcreado']);
    $objsubcategoria->setfmodificado($_POST['fmodificado']);

    $subcategoriaDAO->guardar($objsubcategoria);

?>