<?php

  require_once("../modelo/DAO/clienteDAO.php");

   $objcliente = new cliente();
   $clienteDAO = new clienteDAO;
	
    $objcliente->setcedula($_POST['cedula']);
    $objcliente->setnombre($_POST['nombre']);
    $objcliente->setapellido($_POST['apellido']);
    $objcliente->setcelular($_POST['celular']);
    $objcliente->setdireccion($_POST['direccion']);
    $objcliente->setemail($_POST['email']);


    $clienteDAO->guardar($objcliente);

?>