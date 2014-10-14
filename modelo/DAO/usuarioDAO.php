<?php 

require_once("/../CLASES/usuario.php");
require_once "/../conexion.php";

class UsuarioDao {

    const tabla = "usuario";

    function guardar($ObjUsuario){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (user, password, name, rol) 
              VALUES(:user, :password, :name, :rol)');
            $consulta->bindParam(':user', $ObjUsuario->getUser());
            $consulta->bindParam(':password', $ObjUsuario->getPassword());
            $consulta->bindParam(':name', $ObjUsuario->getName());
            $consulta->bindParam(':rol', $ObjUsuario->getRol());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($ObjUsuario) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE user = :user');
        $consulta->bindParam(':user', $ObjUsuario->getuser());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($ObjUsuario){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET password = :password, rol = :rol, name = :name WHERE user = :user');
      $consulta->bindParam(':user', $ObjUsuario->getUser());
	    $consulta->bindParam(':password', $ObjUsuario->getPassword());
      $consulta->bindParam(':name', $ObjUsuario->getName());
      $consulta->bindParam(':rol', $ObjUsuario->getRol());      
      $consulta->execute();
      $conexion = null;
      
    }

    function buscar($user){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT user, password, name, rol FROM ' . self::tabla . ' WHERE user = :user');
      $consulta->bindParam(':user', $user);
      $consulta->execute();
      $registro = $consulta->fetch(PDO::FETCH_OBJ);
    
      return $registro;

        $conexion = null;

    }

    
    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT user, password, name, rol FROM ' . self::tabla );
      $consulta->execute();
      $registro = $consulta->fetchAll(PDO::FETCH_OBJ);
    
      return $registro;

        $conexion = null;

    }
}

 ?>

