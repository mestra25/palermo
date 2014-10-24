<?php

  require_once("../Modelo/DAO/medidaDAO.php");

   $objmedida = new medida();
   $medidaDAO = new medidaDAO;
    
	  $objmedida->setdescripcion($_POST['descripcion']);
   
      $medidaDAO->guardar($objmedida);

?>