<?php

  require_once("../Modelo/DAO/ubicacionDAO.php");

   $objubicacion = new ubicacion();
   $ubicacionDAO = new ubicacionDAO;
    
     if($_GET['action'] =='Guardar'){
	  $objubicacion->setdescripcion($_POST['descripcion']);
	  $objubicacion->setnueva($_POST['nueva']);
   	  
    $ubicacionDAO->guardar($objubicacion);
}

if($_GET['action'] =='Eliminar'){
	  	$objubicacion->setid_ubicacion($_GET['id_ubicacion']);
		$ubicacionDAO->eliminar($objubicacion);
	}
?>