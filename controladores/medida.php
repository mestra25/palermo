<?php

  require_once("../Modelo/DAO/medidaDAO.php");

   $objmedida = new medida();
   $medidaDAO = new medidaDAO;
    
     if($_GET['action'] =='Guardar'){
	  $objmedida->setdescripcion($_POST['descripcion']);
	  $objmedida->setnueva($_POST['nueva']);
   	  
      $medidaDAO->guardar($objmedida);
}

if($_GET['action'] =='Eliminar'){
	  	$objmedida->setid_medida($_GET['id_medida']);
		$medidaDAO->eliminar($objmedida);
	}
?>