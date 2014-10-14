<?php
require_once '/../CLASES/persona.php';
require_once '/../conexion.php';

class PersonaDao {


    const tabla = "persona";

    function guardar($ObjPersona){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (Identificacion,  Nombres, PrimerApellido, SegundoApellido, FechaNacimiento, Sexo,
            NombresPapa, ApellidosPapa, NombresMama, ApellidosMama ) VALUES(:Identificacion, :Nombres, :PrimerApellido, :SegundoApellido, :FechaNacimiento, 
            :Sexo, :NombresPapa, :ApellidosPapa, :NombresMama, :ApellidosMama )');
            $consulta->bindParam(':Identificacion', $ObjPersona->getIdentificacion());
            $consulta->bindParam(':Nombres', $ObjPersona->getNombres());
            $consulta->bindParam(':PrimerApellido', $ObjPersona->getPrimerApellido());
            $consulta->bindParam(':SegundoApellido', $ObjPersona->getSegundoApellido());
            $consulta->bindParam(':FechaNacimiento', $ObjPersona->getFechaNacimiento());
            $consulta->bindParam(':Sexo', $ObjPersona->getSexo());
            $consulta->bindParam(':NombresPapa', $ObjPersona->getNombresPapa());
            $consulta->bindParam(':ApellidosPapa', $ObjPersona->getApellidosPapa());
            $consulta->bindParam(':NombresMama', $ObjPersona->getNombresMama());
            $consulta->bindParam(':ApellidosMama', $ObjPersona->getApellidosMama());
            $consulta->execute();
            $conexion = null;
    }

    function eliminar($ObjPersona) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE Identificacion = :Cedula');
        $consulta->bindParam(':Cedula', $ObjPersona->getIdentificacion());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($ObjPersona){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET Nombres = :Nombres, PrimerApellido = :PrimerApellido, SegundoApellido = :SegundoApellido, 
        FechaNacimiento = :FechaNacimiento, Sexo = :Sexo, NombresPapa = :NombresPapa, ApellidosPapa = :ApellidosPapa, NombresMama = :NombresMama, ApellidosMama = :ApellidosMama 
        WHERE Identificacion = :Cedula');
        $consulta->bindParam(':Cedula', $ObjPersona->getIdentificacion());
        $consulta->bindParam(':Nombres', $ObjPersona->getNombres());
        $consulta->bindParam(':PrimerApellido', $ObjPersona->getPrimerApellido());
        $consulta->bindParam(':SegundoApellido', $ObjPersona->getSegundoApellido());
        $consulta->bindParam(':FechaNacimiento', $ObjPersona->getFechaNacimiento());
        $consulta->bindParam(':Sexo', $ObjPersona->getSexo());
        $consulta->bindParam(':NombresPapa', $ObjPersona->getNombresPapa());
        $consulta->bindParam(':ApellidosPapa', $ObjPersona->getApellidosPapa());
        $consulta->bindParam(':NombresMama', $ObjPersona->getNombresMama());
        $consulta->bindParam(':ApellidosMama', $ObjPersona->getApellidosMama());    
        
        $consulta->execute();
        $conexion = null;
      
    }

    function buscar($Cedula){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT Identificacion, Nombres, PrimerApellido, SegundoApellido, FechaNacimiento, Sexo, Nombrespapa, Apellidospapa, NombresMama, ApellidosMama 
       FROM ' . self::tabla . ' WHERE Identificacion = :Cedula');
      $consulta->bindParam(':Cedula', $Cedula); 
        $consulta->execute();
        $registro = $consulta->fetch(PDO::FETCH_OBJ);
          
            return $registro;

        $conexion = null;

    }

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT Identificacion, Nombres, PrimerApellido, SegundoApellido, FechaNacimiento, Sexo, NombresPapa, ApellidosPapa, NombresMama, ApellidosMama 
       FROM ' . self::tabla );
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