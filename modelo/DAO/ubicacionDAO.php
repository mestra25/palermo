<?php
require_once '/../CLASES/ubicacion.php';
require_once '/../conexion.php';

class ubicacionDao {


  const tabla = "ubicacion";

  function guardar($Objubicacion){
    $conexion = new conexion();
    $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (descripcion,nueva) VALUES(:descripcion,:nueva)');
    $consulta->bindParam(':descripcion', $Objubicacion->getdescripcion());
    $consulta->bindParam(':nueva', $Objubicacion->getnueva());

    $consulta->execute();
    if ($consulta) {
$conexion=null;
            $conexion = new conexion();
            $consulta = $conexion->prepare('SELECT * FROM '. self::tabla .'  ORDER BY id_ubicacion DESC LIMIT 1' );
            $consulta->execute();
            $registro = $consulta->fetch();
            echo json_encode($registro); 
      if($Objubicacion->getnueva()=="0"){
     echo "<script language='javascript'>"; 
     echo "function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'ubicacion';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/ubicacion.php';
    location.href=pagina;
    "; 
    echo "</script>";  
  }
}
$conexion = null;
}

function eliminar($Objubicacion) {
  $conexion = new Conexion();
  $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE id_ubicacion = :id_ubicacion');
  $consulta->bindParam(':id_ubicacion', $Objubicacion->getid_ubicacion());
 if($consulta->execute()){
                 echo " 
                <script language='JavaScript'> 
                window.location='../vista/ubicacion.php'
                </script>";
}
  $conexion = null;
}

function modificar($Objubicacion){
  
  $conexion = new conexion();
  $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET observacion = :observacion, fcreado = :fcreado, fmodificado = :fmodificado, 
    direccion = :direccion, email = :email WHERE descripcion = :descripcion');
  $consulta->bindParam(':descripcion', $Objubicacion->getdescripcion());
  $consulta->bindParam(':observacion', $Objubicacion->getobservacion());
  $consulta->bindParam(':fcreado', $Objubicacion->getfcreado());
  $consulta->bindParam(':fmodificado', $Objubicacion->getfmodificado());
  $consulta->bindParam(':direccion', $Objubicacion->getDireccion());
  $consulta->bindParam(':email', $Objubicacion->getEmail());
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