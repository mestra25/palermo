<?php

  require_once("../modelo/DAO/usuarioDAO.php");

   $objusuario = new usuario();
   $usuarioDAO = new usuarioDAO();
   if ($_GET['action'] =='Guardar'){
    $vpass=$_POST['password'];
    md5($vpass);
	
    $objusuario->setcedula($_POST['cedula']);
    $objusuario->setnombre($_POST['nombre']);
    $objusuario->setapellido($_POST['apellido']);
    $objusuario->setcelular($_POST['celular']);
    $objusuario->setdireccion($_POST['direccion']);
    $objusuario->setemail($_POST['email']);
    $objusuario->setrol($_POST['rol']);
    $objusuario->setpassword($vpass);



    $usuarioDAO->guardar($objusuario);
  }
  if ($_GET['action'] == 'Editar'){

   $objusuario->setcedula($_POST['cedula']);
    $objusuario->setnombre($_POST['nombre']);
    $objusuario->setapellido($_POST['apellido']);
    $objusuario->setcelular($_POST['celular']);
    $objusuario->setdireccion($_POST['direccion']);
    $objusuario->setemail($_POST['email']);
    $objusuario->setpassword($vpass);
    $usuarioDAO->modificar($objusuario);

  }

  if ($_GET['action'] == 'Eliminar'){

    $objusuario->setcedula($_GET['cedula']);
    
    $usuarioDAO->eliminar($objusuario);

  }

?>