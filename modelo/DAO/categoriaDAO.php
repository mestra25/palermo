<?php
require_once '/../CLASES/categoria.php';
require_once '/../conexion.php';

class categoriaDao {


    const tabla = "categoria";

    function guardar($Objcategoria){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (descripcion,  observacion, fcreado, fmodificado) VALUES(:descripcion, :observacion, :fcreado, :fmodificado)');
            $consulta->bindParam(':descripcion', $Objcategoria->getdescripcion());
            $consulta->bindParam(':observacion', $Objcategoria->getobservacion());
            $consulta->bindParam(':fcreado', $Objcategoria->getfcreado());
            $consulta->bindParam(':fmodificado', $Objcategoria->getfmodificado());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($Objcategoria) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE descripcion = :descripcion');
        $consulta->bindParam(':descripcion', $Objcategoria->getdescripcion());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($Objcategoria){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET observacion = :observacion, fcreado = :fcreado, fmodificado = :fmodificado, 
        direccion = :direccion, email = :email WHERE descripcion = :descripcion');
        $consulta->bindParam(':descripcion', $Objcategoria->getdescripcion());
        $consulta->bindParam(':observacion', $Objcategoria->getobservacion());
        $consulta->bindParam(':fcreado', $Objcategoria->getfcreado());
        $consulta->bindParam(':fmodificado', $Objcategoria->getfmodificado());
        $consulta->bindParam(':direccion', $Objcategoria->getDireccion());
        $consulta->bindParam(':email', $Objcategoria->getEmail());
        $consulta->execute();
        $conexion = null;
      
    }

    function buscar($descripcion){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT descripcion, observacion, fcreado, fmodificado FROM ' . self::tabla . ' WHERE descripcion = :descripcion');
      $consulta->bindParam(':descripcion', $descripcion); 
      $consulta->execute();
      $registro = $consulta->fetch(PDO::FETCH_OBJ);
          
            return $registro;

        $conexion = null;

    }

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT descripcion, observacion, fcreado, fmodificado FROM ' . self::tabla );
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