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
            if ($consulta->execute()) {
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
        document.getElementById('dialogboxhead').innerHTML = 'Cliente';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/cliente.php';
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
      document.getElementById('dialogboxhead').innerHTML = 'Cliente';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/cliente.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
            $conexion = null;
    }

    function eliminar($Objcliente) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objcliente->getCedula());
        if($consulta->execute()){
              echo " 
                <script language='JavaScript'> 
                window.location='../vista/cliente.php'
                </script>";
        }
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
      document.getElementById('dialogboxhead').innerHTML = 'Cliente';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Modificado Correctamente');
      var pagina='../vista/cliente.php';

  location.href=pagina;
  "; 
  echo "</script>";  
            }
      
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