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
        document.getElementById('dialogboxhead').innerHTML = 'Subcategoria';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/subcategoria.php';
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
      document.getElementById('dialogboxhead').innerHTML = 'Subcategoria';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/subcategoria.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
            $conexion = null;
    }

    function eliminar($Objsubcategoria) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE id_subcategoria = :id_subcategoria');
        $consulta->bindParam(':id_subcategoria', $Objsubcategoria->getid_subcategoria());
        if($consulta->execute()){

              echo " 
                <script language='JavaScript'> 
                window.location='../vista/subcategoria.php'
                </script>";
        }

        $conexion = null;
    }

    function modificar($Objsubcategoria){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET descripcion = :descripcion, observacion = :observacion, fmodificado = :fmodificado WHERE id_subcategoria = :id_subcategoria');
      $consulta->bindParam(':id_subcategoria', $Objsubcategoria->getid_subcategoria());
      $consulta->bindParam(':descripcion', $Objsubcategoria->getdescripcion());
      $consulta->bindParam(':observacion', $Objsubcategoria->getobservacion());
      $consulta->bindParam(':fmodificado', $Objsubcategoria->getfmodificado());
           if ($consulta->execute())
            {
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
        document.getElementById('dialogboxhead').innerHTML = 'Subcategoria';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Editados Satisfactoriamente');
    var pagina='../vista/subcategoria.php';
    location.href=pagina;
    "; 
    echo "</script>"; 
            }else{
               echo " 
                <script language='JavaScript'> 
                alert('Error al modificar el registro.'); 
                window.location='../vista/categoria.php'
                </script>";
              
            }
      
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