<?php
require_once '/../CLASES/usuario.php';
require_once '/../conexion.php';

class usuarioDAO {


    const tabla = "usuario";

    function guardar($Objusuario){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (cedula,  nombre, apellido, celular, direccion, email, rol) VALUES(:cedula, :nombre, :apellido, :direccion, :celular,:email, :rol)');
            $consulta->bindParam(':cedula', $Objusuario->getCedula());
            $consulta->bindParam(':nombre', $Objusuario->getNombre());
            $consulta->bindParam(':apellido', $Objusuario->getApellido());
            $consulta->bindParam(':celular', $Objusuario->getCelular());
            $consulta->bindParam(':direccion', $Objusuario->getDireccion());
            $consulta->bindParam(':email', $Objusuario->getEmail());
            $consulta->bindParam(':rol', $Objusuario->getRol());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($Objusuario) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objusuario->getCedula());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($Objusuario){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET nombre = :nombre, apellido = :apellido, celular = :celular, 
        direccion = :direccion, email = :email WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objusuario->getCedula());
        $consulta->bindParam(':nombre', $Objusuario->getNombre());
        $consulta->bindParam(':apellido', $Objusuario->getApellido());
        $consulta->bindParam(':celular', $Objusuario->getCelular());
        $consulta->bindParam(':direccion', $Objusuario->getDireccion());
        $consulta->bindParam(':email', $Objusuario->getEmail());
        $consulta->execute();
        $conexion = null;
      
    }

    function buscar($Cedula){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT cedula, nombre, apellido, celular, direccion, email FROM ' . self::tabla . ' WHERE cedula = :cedula');
      $consulta->bindParam(':cedula', $cedula); 
        $consulta->execute();
        $registro = $consulta->fetch(PDO::FETCH_OBJ);
          
            return $registro;

        $conexion = null;

    }

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT cedula, nombre, apellido, celular, direccion, email FROM ' . self::tabla );
        $consulta->execute();
        $registro = $consulta->fetchAll();
         
      if ($registro) {
            return $registro;
        } else {
          return false;
        }

        $conexion = null;

    }
}

?>