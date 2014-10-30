
<?php
require_once("../modelo/conexion.php");

  $result = "";
  $row = null;
  $conn  = new conexion();

  if (isset($_GET['id_categoria'])) {

    $sql = 'SELECT * FROM categoria WHERE id_categoria = ?';
    $stmt = $conn->prepare($sql);
    $results = $stmt->execute(array($_GET['id_categoria']));
    $row = $stmt->fetch();

    if (empty($row)) {
      $result = "No se encontraron resultados !!";
    }
  }
 ?>

 <!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
        <title>Editar Categoria</title>
         <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

     <link rel="stylesheet" href="css/tabla_categoria.css">
     <link rel="stylesheet" href="css/jquery-ui-1.11.2.css">
    <!-- Fonts -->
     <link rel="stylesheet" href="css/jquery-ui.css">
        <meta http-equiv="X-UA-Compatible" content="IE=9,crome" />
        <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  
    <script src="js/formulario_categoria.js"  type="text/javascript"></script>
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
            <input hidden id="txtidcategoria" name="txtidcategoria" value="<?php echo $row['id_categoria'];?>" >
            <input id="txtdescripcion" name="txtdescripcion" value="<?php echo $row['descripcion'];?>" >
            <br></br> 
            <input id="txtobservacion" name="txtobservacion" value="<?php echo $row['observacion'];?>">
            <br></br> 


            
            <input type="button" class="btneditar" value="Editar" >
        <div id="rpt"></div>
        </form>
        
         

      
    <?php endif;?>
    <body>
</html>
 