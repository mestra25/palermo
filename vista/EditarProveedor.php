
<?php
require_once("../modelo/conexion.php");
  $result = "";
  $row = null;
  $conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.
  if (isset($_GET['nit'])) {
    // Create the query
    $sql = 'SELECT * FROM proveedor WHERE nit = ?';
    // we have to tell the PDO that we are going to send values to the query
    $stmt = $conn->prepare($sql);
    // Now we execute the query passing an array toe execute();
    $results = $stmt->execute(array($_GET['nit']));
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
  
    <script src="js/formulario_proveedor.js"  type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   
 <script type="text/javascript">
  
  $(document).ready(function(){
    $( "#dialog" ).dialog({
        width :  600 , 
        height :  700 , 
        modal :  true });
    
  });
</script>
<style>
/*para cambiar el fondo del cuadro de diálogo*/

.ui-dialog
{
background: #000000;}

/*Para cambiar el contenido del cuadro de diálogo, tamaño de fuente, color de fuente, ...*/

.ui-dialog .ui-widget-content

{

color: #FFFFFF;

font-family: arial;

}

.ui-dialog .ui-widget-header
{background: #005533;}

.ui-dialog .ui-dialog-titlebar

{

color: #FFFFFF;

font-family: arial;

}</style>

 

   
  <?php
    // If there are no records.
    if(!empty($result)) :
      echo $result;
    else :
  ?>
    
        <form id="dialog"  width ="100px" 
        height="300px" >
          <div>
        <label for="name">NIt de Proveedor</label>
        <input type="text" name="nit" id="txtnit" value="<?php echo $row['nit'];?>" class="text ui-widget-content ui-corner-all">
        <br></br>
         <label for="nombre_empresa">Nombre de La empresa</label>
         <input name="txtnombre_empresa" id="txtnombre_empresa"  value="<?php echo $row['nombre_empresa'];?>" class="campos_edi" >
        <br></br>
        <label for="email">Direccion</label>
        <input type="text" name="email" id="txtdireccion" value="<?php echo $row["direccion"];?>" class="text ui-widget-content ui-corner-all">
        <br></br>
        <label for="password">telefono : </label>
        <input type="text" name="password" id="txttelefono" value="<?php echo $row["telefono"];?>" class="text ui-widget-content ui-corner-all">
        <br></br>
        <label for="password">Email : </label>
        <input type="text" name="email" id="txtemail" value="<?php echo $row["email"];?>" class="text ui-widget-content ui-corner-all">
        <br></br>
        <label for="password">Web</label>
        <input name="txtweb" id="txtweb" value="<?php echo $row["web"];?>" title="Se requiere direccion web" class="campos_edi" placeholder="Web" required>
        <br></br>
        <label for="password">Contacto</label>
         <input name="txtcontac" id="txtcontac" value="<?php echo $row["contac"];?>" title="Se requiere datos de contacto" class="campos_edi" placeholder="Contacto" required>
        <br></br>
        <label for="password">Representante Legal</label>
         <input name="txtreplegal" id="txtreplegal" value="<?php echo $row["replegal"];?>" title="Se requiere nombre representante legal" class="campos_edi" placeholder="Representante Legal" required>
        <br></br>
         <label for="password">Cedula Representante Legal</label>           
        <input  name="txtcedrep" id ="txtcedrep"  value="<?php echo $row["cedRep"];?>" title="Se requiere cedula representante legal" class="campos_edi" placeholder="Cedula Representante" required>
       <br></br>
       <label for="password">Celula Representante Legal</label>
       <input name="txtcelrep" id="txtcelrep" value="<?php echo $row["celRep"];?>" title="Se requiere celular representante legal" class="campos_edi" placeholder="Representante Legal" required>
                   
        <br></br>
        <input type="button" class="btneditar" name="btneditar" value="Editar" >
        <div id="rpt"></div>
          </div>
        </form>
      </fieldset>

      
    <?php endif;?>
    <body>
</html>
 