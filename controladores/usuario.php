<?php

  require_once("../modelo/DAO/usuarioDAO.php");

   $objusuario = new usuario();
   $usuarioDAO = new usuarioDAO;
	
    $objusuario->setcedula($_POST['cedula']);
    $objusuario->setnombre($_POST['nombre']);
    $objusuario->setapellido($_POST['apellido']);
    $objusuario->setcelular($_POST['celular']);
    $objusuario->setdireccion($_POST['direccion']);
    $objusuario->setemail($_POST['email']);
    $objusuario->setrol($_POST['rol']);


    $usuarioDAO->guardar($objusuario);

?>