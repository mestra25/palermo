<?php
require_once "/DAO/usuarioDao.php";
require_once "/sesion.php";

class validacion {    
    
    function ValidarUsuario($objUsuario) {

     $contrasena=$this->Desencriptar($objUsuario->getPassword(), "login");     
     $dao = new usuarioDao();
     $res=$dao->buscar($objUsuario->getUser());

     if ($objUsuario->getUser()==$res->user && $res->password==$contrasena) {        
        $rol=$res->rol;        
        

         if( "$rol" == "1"){  
             $ses=new sesion(true);
             $ses->set("autenticado", $res->user);
             $ses->set("rol","1");
             header("Location: /../vista/Bautismo/");             
         }
         /*if( "$rol" == "2"){            
               $ses=new sesion(true);
             $ses->set("autenticado",$myrow['usuario']);                          
             $ses->set("rol","2");
             header("Location:../vistas/usuarioavanzado/");             
         }*/                    
     }
     else {
               header("Location: /../index.php?error=404");                                           
          } 
    }
    
    function BloquedeSeguridad() {
        //Inicio la sesión
    $ses=new sesion(true);            
    //Comprueba que el usuario esta autenticado
    //$this->persona($ses->get("autenticado"));
    if(!($ses->validaSesion("autenticado"))){   
       //Si no existe, va a la paggina de autenticacion
	header("Location: /../index.php?");        
	//salimos de este script
	exit();
      }                  
    }
    
    function persona($sesion) {    
     
     $dao = new usuarioDao();
     $usuario = $dao->buscar($sesion);     
     return $usuario;
    }
    
    function BloqueDeSalida() {
        $ses=new sesion(true);    
        $ses->borrar_variable("autenticado");
        $ses->borrarsesíon();
        header("Location: ../index.php");
    }
    
    function getToken($name)
    {
    $ses=new sesion(true);        
    $alphanum = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdfghijklmnopqrstuvwxyz0123456789";
    $token = md5(substr(md5(str_shuffle($alphanum)), 0, 10));
    $ses->set("token_".$name, $token);    
    return $token;
    }

    function Desencriptar($cadena,$name)
    {
        $ses=new sesion(true);        
        $suma = 0;
        $newtexto = "";
        $sesion=$ses->get("token_".$name);
        for($x=0; $x < strlen($sesion); $x++)
        {       
        $suma += ord($sesion[$x]);
        }

        $semilla = "$suma";
        $suma = 0;

        for($z=0; $z < strlen($semilla); $z++)
        {
        $suma += $semilla[$z];
        }
        $semilla = $suma;

        for($y=0; $y < strlen($cadena); $y++)
        {
            if(ord($cadena[$y]) - $semilla > 31)
            {
            $suma = (ord($cadena[$y]) - $semilla);
            }
            else
            {
                $suma = 126 - (31 - (ord($cadena[$y]) - $semilla));
            }          
            $newtexto .= chr($suma);
        }
        return $newtexto;    
    }
    
}//fin de la clase

if(isset($_POST['username'])&&isset($_POST['password'])){
$obj=new validacion();
$usuario = new usuario();

$usuario->setUser($_POST['username']);
$usuario->setPassword($_POST['password']);
$obj->ValidarUsuario($usuario);
}
?>

