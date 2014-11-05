<?php
require_once '/../CLASES/medida.php';
require_once '/../conexion.php';

class medidaDao {


  const tabla = "medida";

  function guardar($Objmedida){
    $conexion = new conexion();
    $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (descripcion,nueva) VALUES(:descripcion,:nueva)');
    $consulta->bindParam(':descripcion', $Objmedida->getdescripcion());
    $consulta->bindParam(':nueva', $Objmedida->getnueva());

    $consulta->execute();
    if ($consulta) {
$conexion=null;
            $conexion = new conexion();
            $consulta = $conexion->prepare('SELECT * FROM '. self::tabla .'  ORDER BY id_medida DESC LIMIT 1' );
            $consulta->execute();
            $registro = $consulta->fetch();
            echo json_encode($registro); 
      if($Objmedida->getnueva()=="0"){
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
        document.getElementById('dialogboxhead').innerHTML = 'Medida';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/medida.php';
    location.href=pagina;
    "; 
    echo "</script>";  
  }
}
$conexion = null;
}

function eliminar($Objmedida) {
  $conexion = new Conexion();
  $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE id_medida = :id_medida');
  $consulta->bindParam(':id_medida', $Objmedida->getid_medida());
 if($consulta->execute()){
                 echo " 
                <script language='JavaScript'> 
                window.location='../vista/medida.php'
                </script>";
}
  $conexion = null;
}

function modificar($Objmedida){
  
  $conexion = new conexion();
  $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET observacion = :observacion, fcreado = :fcreado, fmodificado = :fmodificado, 
    direccion = :direccion, email = :email WHERE descripcion = :descripcion');
  $consulta->bindParam(':descripcion', $Objmedida->getdescripcion());
  $consulta->bindParam(':observacion', $Objmedida->getobservacion());
  $consulta->bindParam(':fcreado', $Objmedida->getfcreado());
  $consulta->bindParam(':fmodificado', $Objmedida->getfmodificado());
  $consulta->bindParam(':direccion', $Objmedida->getDireccion());
  $consulta->bindParam(':email', $Objmedida->getEmail());
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