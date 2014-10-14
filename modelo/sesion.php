<?php
class sesion{

function __construct($parametro/*si,no*/) {
    if ($parametro=="si" || $parametro==true) {
        
        if (!isset($_SESSION)) {
           session_start();  
        }

        /*else
          {
            session_destroy();
            session_start(); 
          }*/ 
    }              
}
public function set($nombre,$valor)
{
 $_SESSION[$nombre] = $valor;
}

public function get($nombre)
{
if (isset ($_SESSION[$nombre] ) ) {
 return $_SESSION[$nombre];
} else {
return false;
}
}
function validaSesion($nombre) {
if (isset ($_SESSION[$nombre]))
  return true;
   else 
    return false;

}
function validar($nomSesion,$valor) {
   if($_SESSION[$nomSesion]==$valor)
       return true;
       else
         return false;
}

public function borrar_variable($nombre)
{
 unset ($_SESSION[$nombre] ) ;
}

public function borrarsesíon()
{
 $_SESSION = array();
 session_destroy(); 
}
} 
?>