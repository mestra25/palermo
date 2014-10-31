<?php
require_once '/../CLASES/usuario.php';
require_once '/../conexion.php';

class usuarioDAO {


    const tabla = "usuario";

    function guardar($Objusuario){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (cedula,  nombre, apellido, celular, direccion, email, rol) VALUES(:cedula, :nombre, :apellido, :direccion, :celular,:email, :rol)');
            $consulta->bindParam(':cedula', $Objusuario->getCedula());
            $consulta->bindParam(':nombre', $Objusuario->getNombre());
            $consulta->bindParam(':apellido', $Objusuario->getApellido());
            $consulta->bindParam(':celular', $Objusuario->getCelular());
            $consulta->bindParam(':direccion', $Objusuario->getDireccion());
            $consulta->bindParam(':email', $Objusuario->getEmail());
            $consulta->bindParam(':rol', $Objusuario->getRol());
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
        document.getElementById('dialogboxhead').innerHTML = 'Usuario';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/usuarios.php';
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
      document.getElementById('dialogboxhead').innerHTML = 'Usuario';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/usuarios.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
            $conexion = null;
    }

    function eliminar($Objusuario) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objusuario->getCedula());
        if ($consulta->execute())
            {
              echo " 
                <script language='JavaScript'> 
                window.location='../vista/usuarios.php'
                </script>";
            }
        
      $conexion = null;
      
    }

    function modificar($Objusuario){
      
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET nombre = :nombre, apellido = :apellido, celular = :celular, 
        direccion = :direccion, email = :email WHERE cedula = :cedula');
        $consulta->bindParam(':cedula', $Objusuario->getCedula());
        $consulta->bindParam(':nombre', $Objusuario->getNombre());
        $consulta->bindParam(':apellido', $Objusuario->getApellido());
        $consulta->bindParam(':celular', $Objusuario->getCelular());
        $consulta->bindParam(':direccion', $Objusuario->getDireccion());
        $consulta->bindParam(':email', $Objusuario->getEmail());

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
        document.getElementById('dialogboxhead').innerHTML = 'Usuario';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Editados Satisfactoriamente');
    var pagina='../vista/usuarios.php';
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