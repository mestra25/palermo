
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
                          <label >Cedula*</label>
                          <input name="txtcedula" id="txtcedula" value="<?php echo $row["cedula"];?>" pattern="[0-9 ]{3,20}" >
                          <br></br> 
                          <label >Nombre*</label>
                          <input name="txtnombre" id="txtnombre" value="<?php echo $row["nombre"];?>" pattern="[a-z ]" >
                          <br></br>
                          <label >Apellido*</label>
                          <input name="txtapellido" id="txtapellido" value="<?php echo $row["apellido"];?>" pattern="[a-z ]{3,20}" >
                          <br></br> 
                          <label >Celular</label>
                          <input name="txtcelular" id="txtcelular" value="<?php echo $row["celular"];?>"pattern="[0-9 ]{3,20}" >
                          <br></br> 
                          <label >Direccion*</label>
                          <input name="txtdireccion" id="txtdireccion"value="<?php echo $row["direccion"];?>"pattern="[a-z ]{3,20}" >
                          <br></br> 
                          <label >Email*</label>
                          <input name="txtemail" id="txtemail" value="<?php echo $row["email"];?>"pattern="[a-z ]{3,20}">
                          <br></br> 

                          <input type="button" class="btneditar" name="btneditar" value="Editar" >
                           <div id="rpt"></div>
                      </form>
      
    <?php endif;?>
    <body>
</html>
 