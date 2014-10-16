<?php
require_once '/../CLASES/subcategoria.php';
require_once '/../conexion.php';

class subcategoriaDao {


    const tabla = "subcategoria";

    function guardar($Objsubcategoria){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (descripcion,  observacion, fcreado, fmodificado) VALUES(:descripcion, :observacion, :fcreado, :fmodificado)');
            $consulta->bindParam(':descripcion', $Objsubcategoria->getdescripcion());
            $consulta->bindParam(':observacion', $Objsubcategoria->getobservacion());
            $consulta->bindParam(':fcreado', $Objsubcategoria->getfcreado());
            $consulta->bindParam(':fmodificado', $Objsubcategoria->getfmodificado());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($Objsubcategoria) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE descripcion = :descripcion');
        $consulta->bindParam(':descripcion', $Objsubcategoria->getdescripcion());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($Objsubcategoria){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET observacion = :observacion, fcreado = :fcreado, fmodificado = :fmodificado, 
        direccion = :direccion, email = :email WHERE descripcion = :descripcion');
        $consulta->bindParam(':descripcion', $Objsubcategoria->getdescripcion());
        $consulta->bindParam(':observacion', $Objsubcategoria->getobservacion());
        $consulta->bindParam(':fcreado', $Objsubcategoria->getfcreado());
        $consulta->bindParam(':fmodificado', $Objsubcategoria->getfmodificado());
        $consulta->bindParam(':direccion', $Objsubcategoria->getDireccion());
        $consulta->bindParam(':email', $Objsubcategoria->getEmail());
        $consulta->execute();
        $conexion = null;
      
    }

    function buscar($descripcion){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT descripcion, observacion, fcreado, fmodificado, direccion, email FROM ' . self::tabla . ' WHERE descripcion = :descripcion');
      $consulta->bindParam(':descripcion', $descripcion); 
        $consulta->execute();
        $registro = $consulta->fetch(PDO::FETCH_OBJ);
          
            return $registro;

        $conexion = null;

    }

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT descripcion, observacion, fcreado, fmodificado, direccion, email FROM ' . self::tabla );
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