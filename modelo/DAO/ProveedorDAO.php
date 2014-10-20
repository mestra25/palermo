<?php
require_once '/../CLASES/Proveedor.php';
require_once '/../conexion.php';

class proveedorDao {

    const tabla="proveedor";

    function guardar($Objproveedor){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' ( nit, direccion,telefono ,email ,web ,contac ,replegal ,cedRep ,celRep ) 
              VALUES( :nit,:direccion, :telefono ,:email ,:web ,:contac ,:replegal ,:cedRep ,:celRep )');
            $consulta->bindParam(':nit', $Objproveedor->getnit());
            $consulta->bindParam(':direccion', $Objproveedor->getDireccion());
            $consulta->bindParam(':telefono', $Objproveedor->getTelefono());
            $consulta->bindParam(':email', $Objproveedor->getEmail());
            $consulta->bindParam(':web', $Objproveedor->getWeb());
            $consulta->bindParam(':contac', $Objproveedor->getContac());
            $consulta->bindParam(':replegal', $Objproveedor->getReplegal());
            $consulta->bindParam(':cedRep', $Objproveedor->getCedrep());
            $consulta->bindParam(':celRep', $Objproveedor->getCelrep());
            
             if ($consulta->execute())
            {
              echo " 
                <script language='JavaScript'> 
                alert('Registro creado correctamente'); 
                </script>";
            }else{
               echo " 
                <script language='JavaScript'> 
                alert('Error al crear el registro.'); 
                </script>";
            }

            $conexion = null;
    }

    function eliminar($Objproveedor) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE idProveedor = :idProveedor');
        $consulta->bindParam(':idProveedor', $Objproveedor->getidProveedor());
        $consulta->execute();
        $conexion = null;
    }

    function modificar($Objproveedor){
      
  
      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET  direccion = :direccion , telefono = :telefono , email = :email , web = :web , 
      contac = :contac , replegal = :replegal , cedRep = :cedRep , cedRep = :cedRep WHERE nit = :nit');
      $consulta->bindParam(':nit', $Objproveedor->getnit());
            $consulta->bindParam(':direccion', $Objproveedor->getDireccion());
            $consulta->bindParam(':telefono', $Objproveedor->getTelefono());
            $consulta->bindParam(':email', $Objproveedor->getEmail());
            $consulta->bindParam(':web', $Objproveedor->getWeb());
            $consulta->bindParam(':contac', $Objproveedor->getContac());
            $consulta->bindParam(':replegal', $Objproveedor->getReplegal());
            $consulta->bindParam(':cedRep', $Objproveedor->getCedrep());
            $consulta->bindParam(':celRep', $Objproveedor->getCelrep());
            
      /*if ($consulta->execute())
            {
              echo " 
                <script language='JavaScript'> 
                alert('Registro modificado correctamente.'); 
                </script>";
            }else{
               echo " 
                <script language='JavaScript'> 
                alert('Error al modificar el registro.'); 
                </script>";
            }*/
              $consulta->execute();
      
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