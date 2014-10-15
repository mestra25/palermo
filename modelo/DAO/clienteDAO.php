<?php
require_once '/../CLASES/cliente.php';
require_once '/../conexion.php';

class clienteDao {


    const tabla = "cliente";

    function guardar($Objcliente){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (cedula,  nombre, apellido, celular, direccion, email) VALUES(:cedula, :nombre, :apellido, :direccion, :celular,:email)');
            $consulta->bindParam(':cedula', $Objcliente->getCedula());
            $consulta->bindParam(':nombre', $Objcliente->getNombre());
            $consulta->bindParam(':apellido', $Objcliente->getApellido());
            $consulta->bindParam(':celular', $Objcliente->getCelular());
            $consulta->bindParam(':direccion', $Objcliente->getDireccion());
            $consulta->bindParam(':email', $Objcliente->getEmail());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($Objcliente) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objcliente->getCedula());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($Objcliente){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET nombre = :nombre, apellido = :apellido, celular = :celular, 
        direccion = :direccion, email = :email WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objcliente->getCedula());
        $consulta->bindParam(':nombre', $Objcliente->getNombre());
        $consulta->bindParam(':apellido', $Objcliente->getApellido());
        $consulta->bindParam(':celular', $Objcliente->getCelular());
        $consulta->bindParam(':direccion', $Objcliente->getDireccion());
        $consulta->bindParam(':email', $Objcliente->getEmail());
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