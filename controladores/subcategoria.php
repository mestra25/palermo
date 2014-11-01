<?php

  require_once("../modelo/DAO/subcategoriaDAO.php");

   $objsubcategoria = new subcategoria();
   $subcategoriaDAO = new subcategoriaDAO;
	
	   if($_GET['action'] =='Guardar'){

    $objsubcategoria->setid_categoria($_POST['id_categoria']);
    $objsubcategoria->setdescripcion($_POST['descripcion']);
    $objsubcategoria->setobservacion($_POST['observacion']);
    $objsubcategoria->setfcreado($_POST['fcreado']);
    $objsubcategoria->setfmodificado($_POST['fmodificado']);

    $subcategoriaDAO->guardar($objsubcategoria);
}

if($_GET['action'] =='Editar'){

    $objsubcategoria->setid_subcategoria($_POST['id_subcategoria']);
	  $objsubcategoria->setdescripcion($_POST['descripcion']);
    $objsubcategoria->setobservacion($_POST['observacion']);
    $objsubcategoria->setfmodificado($_POST['fmodificado']);
    
    $subcategoriaDAO->modificar($objsubcategoria);
}
if ($_GET['action'] == 'Eliminar'){

    $objsubcategoria->setid_subcategoria($_GET['id_subcategoria']);
    
   $subcategoriaDAO->Eliminar($objsubcategoria);

  }
?>