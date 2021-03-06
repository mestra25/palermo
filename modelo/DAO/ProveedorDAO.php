<?php
require_once '/../CLASES/Proveedor.php';
require_once '/../conexion.php';

class proveedorDao {

    const tabla="proveedor";

    function guardar($Objproveedor){

            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' ( nit, direccion,nombre_empresa,telefono ,email ,web ,contac ,numcontac,replegal ,cedRep ,celRep,nueva) 
              VALUES( :nit,:direccion,:nombre_empresa, :telefono ,:email ,:web ,:contac,:numcontac ,:replegal ,:cedRep ,:celRep,:nueva)');
            $consulta->bindParam(':nit', $Objproveedor->getnit());
            $consulta->bindParam(':nueva', $Objproveedor->getnueva());
            $consulta->bindParam(':direccion', $Objproveedor->getDireccion());
            $consulta->bindParam(':nombre_empresa', $Objproveedor->getNombreEmpresa());
            $consulta->bindParam(':telefono', $Objproveedor->getTelefono());
            $consulta->bindParam(':email', $Objproveedor->getEmail());
            $consulta->bindParam(':web', $Objproveedor->getWeb());
            $consulta->bindParam(':contac', $Objproveedor->getContac());
            $consulta->bindParam(':numcontac', $Objproveedor->getnumContac());
            $consulta->bindParam(':replegal', $Objproveedor->getReplegal());
            $consulta->bindParam(':cedRep', $Objproveedor->getCedrep());
            $consulta->bindParam(':celRep', $Objproveedor->getCelrep());

if ($consulta->execute()) {
            $conexion=null;
            $conexion = new conexion();
            $consulta = $conexion->prepare('SELECT * FROM '. self::tabla .'  ORDER BY id_proveedor DESC LIMIT 1' );
            $consulta->execute();
            $registro = $consulta->fetch();
            echo json_encode($registro);  

  if($Objproveedor->getnueva()=="0"){
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
        document.getElementById('dialogboxhead').innerHTML = 'Proveedor';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/proveedor.php';
    location.href=pagina;
    "; 
    echo "</script>";  
  
}
} 

            $conexion = null;
    }

    function eliminar($Objproveedor) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE nit = :nit');
        $consulta->bindParam(':nit', $Objproveedor->getnit());
        
        if ($consulta->execute())
        {
    
              echo " 
                <script language='JavaScript'> 
                window.location='../vista/proveedor.php'
                </script>";

            }
      
      $conexion = null;
      
    }

    function modificar($Objproveedor){
      
  
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET  nombre_empresa = :nombre_empresa ,direccion = :direccion , telefono = :telefono , email = :email , web = :web , 
      contac = :contac,numcontac=:numcontac , replegal = :replegal , cedRep = :cedRep , celRep = :celRep WHERE nit = :nit');
            $consulta->bindParam(':nit', $Objproveedor->getnit());
            $consulta->bindParam(':direccion', $Objproveedor->getDireccion());
            $consulta->bindParam(':nombre_empresa', $Objproveedor->getNombreEmpresa());
            $consulta->bindParam(':telefono', $Objproveedor->getTelefono());
            $consulta->bindParam(':email', $Objproveedor->getEmail());
            $consulta->bindParam(':web', $Objproveedor->getWeb());
            $consulta->bindParam(':contac', $Objproveedor->getContac());
            $consulta->bindParam(':numcontac', $Objproveedor->getnumContac());
            $consulta->bindParam(':replegal', $Objproveedor->getReplegal());
            $consulta->bindParam(':cedRep', $Objproveedor->getCedrep());
            $consulta->bindParam(':celRep', $Objproveedor->getCelrep());
            
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
        document.getElementById('dialogboxhead').innerHTML = 'Proveedor';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Editados Satisfactoriamente');
    var pagina='../vista/proveedor.php';
    location.href=pagina;
    "; 
    echo "</script>";  
              
            }
      
      $conexion = null;
      
    }

    function buscar($Cedula){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT idProveedor, nit, direccion,telefono ,email ,web ,contac ,replegal ,cedRep ,celRep FROM ' . self::tabla . ' WHERE nit = :=nit');
         $consulta->bindParam(':idProveedor', $Objproveedor->getidProveedor());
            $consulta->bindParam(':direccion', $Objproveedor->getDireccion());
            $consulta->bindParam(':telefono', $Objproveedor->getTelefono());
            $consulta->bindParam(':email', $Objproveedor->getEmail());
            $consulta->bindParam(':web', $Objproveedor->getWeb());
            $consulta->bindParam(':contac', $Objproveedor->getContac());
            $consulta->bindParam(':replegal', $Objproveedor->getTelefono());
            $consulta->bindParam(':cedRep', $Objproveedor->getCedRepl());
            $consulta->bindParam(':celRep', $Objproveedor->getCelRep());
      $consulta->execute();
      $registro = $consulta->fetch(PDO::FETCH_OBJ);
    
      if ($registro) {
            return  $registro;
        } else {
          return false;
        }

        $conexion = null;
      }

      

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT idProveedor, nit, direccion,telefono ,email ,web ,contac ,replegal ,cedRep ,celRep FROM ' . self::tabla );
      $consulta->execute();
      $registro = $consulta->fetchAll(PDO::FETCH_OBJ);
      
      return  $registro;
      $conexion = null;

    }




}





?>