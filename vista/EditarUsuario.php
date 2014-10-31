
<?php
require_once("../modelo/conexion.php");
  $result = "";
  $row = null;
  $conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.
  if (isset($_GET['cedula'])) {
    // Create the query
    $sql = 'SELECT * FROM usuario WHERE cedula = ?';
    
    $stmt = $conn->prepare($sql);
    
    $results = $stmt->execute(array($_GET['cedula']));
    
    $row = $stmt->fetch();
    /*
    $error = $stmt->errorInfo();
    echo $error[2];
    */
    if (empty($row)) {
      $result = "No se encontraron resultados !!";
    }
  }
 ?>

 <!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
        <title>Editar Usuario</title>
         <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">
 


  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  
    <script src="js/formulario_usuario.js"  type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   
 

 

   
  <?php
    // If there are no records.
    if(!empty($result)) :
      echo $result;
    else :
  ?>
    <center>
        <div id="formulario">

          <h2>Agregar Usuario</h2>

        <form>

            <br></br>             

          
            <br></br>  
            <input name="txtcedula" id="txtcedula"  value="<?php echo $row['cedula'];?>">
            <br></br> 
            <input name="txtnombre" id="txtnombre" value="<?php echo $row['nombre'];?>">
            <br></br>
            <input name="txtapellido" id="txtapellido"  value="<?php echo $row['apellido'];?>">
            <br></br> 
            <input name="txtcelular" id="txtcelular"  value="<?php echo $row['celular'];?>">
            <br></br> 
            <input name="txtdireccion" id="txtdireccion"  value="<?php echo $row['direccion'];?>">
            <br></br> 
            <input name="txtemail" id="txtemail"  value="<?php echo $row['email'];?>">
            <br></br> 
            
            <select id="txtrol" title="Se requiere Seleccion de Categoria" required class="campos_edi">  
              <option  value="administrador">Administrador</option> 
              <option  value="administrador-inventario">Administrador Inventario</option> 
              <option  value="usuario">Usuario</option> 
            <br></br>                         
            
            <input type="button" class="btneditar" name="btneditar" value="Editar" >
        <div id="rpt"></div>
          </form>
           </form>
        </div>
      </fieldset>

      
    <?php endif;?>
    <body>
</html>
 