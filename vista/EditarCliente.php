
<?php
require_once("../modelo/conexion.php");
  $result = "";
  $row = null;
  $conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.
  if (isset($_GET['cedula'])) {
    // Create the query
    $sql = 'SELECT * FROM cliente WHERE cedula = ?';
    // we have to tell the PDO that we are going to send values to the query
    $stmt = $conn->prepare($sql);
    // Now we execute the query passing an array toe execute();
    $results = $stmt->execute(array($_GET['cedula']));
    // Extract the values from $result
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
        <title>Editar Proveedor</title>
         <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

     <link rel="stylesheet" href="css/tabla_proveedor.css">
     <link rel="stylesheet" href="css/jquery-ui-1.11.2.css">
    <!-- Fonts -->
     <link rel="stylesheet" href="css/jquery-ui.css">
        <meta http-equiv="X-UA-Compatible" content="IE=9,crome" />
        <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  
    <script src="js/formulario_cliente.js"  type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   
 

 

   
  <?php
    // If there are no records.
    if(!empty($result)) :
      echo $result;
    else :
  ?>
    
         <form>

                          <br></br>              

                          <input name="txtcedula" id="txtcedula" value="<?php echo $row['cedula'];?>">
                          <br></br> 
                          <input name="txtnombre" id="txtnombre" value="<?php echo $row['nombre'];?>" >
                          <br></br>
                          <input name="txtapellido" id="txtapellido" value="<?php echo $row['apellido'];?>">
                          <br></br> 
                          <input name="txtcelular" id="txtcelular" value="<?php echo $row['celular'];?>">
                          <br></br> 
                          <input name="txtdireccion" id="txtdireccion" value="<?php echo $row['direccion'];?>">
                          <br></br> 
                          <input name="txtemail" id="txtemail" value="<?php echo $row['email'];?>">
                          <br></br> 
                         <input type="button" class="btneditar" value="Editar" >
                           <div id="respuesta"></div>
                      </form>
      </fieldset>

      
    <?php endif;?>
    <body>
</html>
 