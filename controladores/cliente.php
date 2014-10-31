<?php

  require_once("../modelo/DAO/clienteDAO.php");

   $objcliente = new cliente();
   $clienteDAO = new clienteDAO();
	
    
 if ($_GET['action'] =='Guardar'){
    
  
    $objcliente->setcedula($_POST['cedula']);
    $objcliente->setnombre($_POST['nombre']);
    $objcliente->setapellido($_POST['apellido']);
    $objcliente->setcelular($_POST['celular']);
    $objcliente->setdireccion($_POST['direccion']);
    $objcliente->setemail($_POST['email']);


    $clienteDAO->guardar($objcliente);

}

 if ($_GET['action'] =='Editar'){
    
  
    $objcliente->setcedula($_POST['cedula']);
    $objcliente->setnombre($_POST['nombre']);
    $objcliente->setapellido($_POST['apellido']);
    $objcliente->setcelular($_POST['celular']);
    $objcliente->setdireccion($_POST['direccion']);
    $objcliente->setemail($_POST['email']);


    $clienteDAO->modificar($objcliente);

}
if ($_GET['action'] == 'Eliminar'){


    $objcliente->setCedula($_GET['cedula']);
    
    $clienteDAO->eliminar($objcliente);
 
            }

?>