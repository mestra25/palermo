<?php
try {require_once("../modelo/conexion.php");
   
   $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT  nit, direccion,telefono ,email ,web ,contac ,replegal ,cedRep ,celRep FROM proveedor'  );
      $consulta->bindparam(1,$_REQUEST['nit']);

      if ($consulta->execute())
      {

      $registro = $consulta->fetchAll(PDO::FETCH_OBJ);

      

 
        //values to fill up our form
        $nit = $registro["nit"];
        $direccion = $registro['direccion'];
        $telefono = $registro['telefono'];
        $email = $registro['email'];
        $web = $registro[' web'];
        $contac = $registro['contac'];
        $replegal = $registro['replegal'];
        $cedRep = $registro['celRep'];
        $cedRep = $registro['cedRep'];
       
 
    }else{
        echo "Unable to read record.";
    }
}
 
//to handle error
catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>

 <form id='updateUserForm' action='#' method='post'>
                          <br></br>              
                    <td><input name="txtnit" id="txtnit" title="Se requiere Nit de la empresa" class="campos_edi" placeholder="Nit" value="<?php echo $nit?>" required></td>
                    
                    <br></br> 
                    <td><input name="txtdireccion" id="txtdireccion" title="Se requiere direccion" class="campos_edi" placeholder="direccion" value="<?php echo $direccion?>"required></td>
                    
                    <br></br> 
                    <td><input name"txttelefono" id="txttelefono" title="Se requiere telefono" onkeydown="" type="text" class="campos_edi" value="<?php echo $telefono?>" placeholder="Telefono" required></td>
                    
                    <br></br> 
                    <input name="txtemail" id="txtemail" title="Se requiere e-mail" class="campos_edi" placeholder="E-mail"value="<?php echo $email?>" required>
                    <br></br>
                    <input name="txtweb" id="txtweb" title="Se requiere direccion web" class="campos_edi" placeholder="Web" value="<?php echo $web?>" required>
                    <br></br>
                    <input name="txtcontac" id="txtcontac" title="Se requiere datos de contacto" class="campos_edi" placeholder="Contacto" value="<?php echo $contac?>"required>
                    <br></br>
                    <input name="txtreplegal" id="txtreplegal" title="Se requiere nombre representante legal" class="campos_edi" placeholder="Representante Legal" value="<?php echo $replegal?>"required>
                    <br></br>
                    
                    <input  name="txtcedrep" id ="txtcedrep"title="Se requiere cedula representante legal" class="campos_edi" placeholder="Cedula Representante"  value="<?php echo $cedrep?>" required>
                     <br></br>

                    <input name="txtcelrep" id="txtcelrep" title="Se requiere celular representante legal" class="campos_edi" placeholder="Representante Legal" value="<?php echo $celrep?>" required>
                   
                    <br></br>
                
                    <input type="button" name="btnmodificar" value="Modificar" id="btnmodificar" class="btn">
                    <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
                    <div id="respuesta"></div>
 </form>