
<?php
require_once("../modelo/conexion.php");
  $result = "";
  $row = null;
  $conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.
  if (isset($_GET['nit'])) {
    // Create the query
    $sql = 'SELECT * FROM proveedor WHERE nit = ?';
    
    $stmt = $conn->prepare($sql);
    
    $results = $stmt->execute(array($_GET['nit']));
    
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
  
    <script src="js/formulario_proveedor.js"  type="text/javascript"></script>
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

          <h2>Editar Usuario</h2>

       <div id="formulario" >
            <form>
                <h2>Agregar Proveedor</h2>
                <br></br>              

                <input name="txtnit" id="txtnit" value="<?php echo $row['nit'];?>">
                <br></br> 
                <input name="txtnombre_empresa" id="txtnombre_empresa" value="<?php echo $row['nombre_empresa'];?>">
                <br></br>
                <input name="txtdireccion" id="txtdireccion" value="<?php echo $row['direccion'];?>">
                <br></br> 
                <input name"txttelefono" id="txttelefono"value="<?php echo $row['telefono'];?>">
                <br></br> 
                <input name="txtemail" id="txtemail" value="<?php echo $row['email'];?>">
                <br></br>
                <input name="txtweb" id="txtweb" value="<?php echo $row['web'];?>">
                <br></br>
                <input name="txtcontac" id="txtcontac" value="<?php echo $row['contac'];?>">
                <br></br>
                <input name="txtreplegal" id="txtreplegal" value="<?php echo $row['replegal'];?>">
                <br></br>
                <input  name="txtcedrep" id ="txtcedrep" value="<?php echo $row['cedRep'];?>">
                <br></br>
                <input name="txtcelrep" id="txtcelrep" value="<?php echo $row['celRep'];?>">
                <br></br>
                
                <input type="button" name="btnguardar" value="Guardar"  id="btn" class="btn">
                <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
                <div id="respuesta"></div>
            </form>
        </div>


        <div id="page-wrap">
      
    <?php endif;?>
    <body>
</html>
 