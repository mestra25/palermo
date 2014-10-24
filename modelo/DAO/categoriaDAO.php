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
    var pagina='../vista/categoria.php';
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
      document.getElementById('dialogboxhead').innerHTML = 'Medida';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/categoria.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
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