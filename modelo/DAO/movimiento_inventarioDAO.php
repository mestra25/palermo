<?php
require_once '/../CLASES/movimiento_inventario.php';
require_once '/../conexion.php';

class movimiento_inventarioDao {


  const tabla = "movimiento_inventario";

  function guardarusuario($Objmovimiento_inventario){
    $conexion = new conexion();
    $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (codigo,usuario,cantidad,v_costo) VALUES(:codigo,:usuario,:cantidad,:v_costo)');
    $consulta->bindParam(':codigo', $Objmovimiento_inventario->getCodigo());
    $consulta->bindParam(':usuario', $Objmovimiento_inventario->getusuario());
    $consulta->bindParam(':cantidad', $Objmovimiento_inventario->getcantidad());
    $consulta->bindParam(':v_costo', $Objmovimiento_inventario->getv_costo());

    $consulta->execute();
    if ($consulta) {
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
        document.getElementById('dialogboxhead').innerHTML = 'movimiento_inventario';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/rol_usuario.php';
    location.href=pagina;
    "; 
    echo "</script>";  
  }else{
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
      document.getElementById('dialogboxhead').innerHTML = 'movimiento_inventario';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/movimiento_inventario.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
$conexion = null;
}

function eliminar($Objmovimiento_inventario) {
  $conexion = new Conexion();
  $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE descripcion = :descripcion');
  $consulta->bindParam(':descripcion', $Objmovimiento_inventario->getdescripcion());
  $consulta->execute();
  $conexion = null;
}

function modificar($Objmovimiento_inventario){
  
  $conexion = new conexion();
  $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET observacion = :observacion, fcreado = :fcreado, fmodificado = :fmodificado, 
    direccion = :direccion, email = :email WHERE descripcion = :descripcion');
  $consulta->bindParam(':descripcion', $Objmovimiento_inventario->getdescripcion());
  $consulta->bindParam(':observacion', $Objmovimiento_inventario->getobservacion());
  $consulta->bindParam(':fcreado', $Objmovimiento_inventario->getfcreado());
  $consulta->bindParam(':fmodificado', $Objmovimiento_inventario->getfmodificado());
  $consulta->bindParam(':direccion', $Objmovimiento_inventario->getDireccion());
  $consulta->bindParam(':email', $Objmovimiento_inventario->getEmail());
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