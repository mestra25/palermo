<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Modal form</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   <script src="dialog.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>
  
  </script>
</head>
<body>
 <?php
       require("php/lista_proveedor.php");
     
       foreach ($consulta as $registro) {
       
        ?>
            
                
              
<div id="dialog-form" title="Editar Proveedor">
  <p class="validateTips">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for="name">Name</label>
      <input type="text" name="name" id="txtname" value="<?php echo $registro["nit"];?>" class="text ui-widget-content ui-corner-all">
      <label for="email">Email</label>
      <input type="text" name="email" id="txtemail" value="<?php echo $registro["direccion"];?>" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="txtpassword" value="<?php echo $registro["telefono"];?>" class="text ui-widget-content ui-corner-all">
      <input type="text" name="email" id="txtemail" value="<?php echo $registro["email"];?>" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <label for="password">Web</label>
      <input name="txtweb" id="txtweb" value="<?php echo $registro["web"];?>" title="Se requiere direccion web" class="campos_edi" placeholder="Web" required>
      <br></br>
       <input name="txtcontac" id="txtcontac" value="<?php echo $registro["contac"];?>" title="Se requiere datos de contacto" class="campos_edi" placeholder="Contacto" required>
      <br></br>
     <input name="txtreplegal" id="txtreplegal" value="<?php echo $registro["replegal"];?>" title="Se requiere nombre representante legal" class="campos_edi" placeholder="Representante Legal" required>
    <br></br>
                    
                    <input  name="txtcedrep" id ="txtcedrep"  value="<?php echo $registro["cedRep"];?>" title="Se requiere cedula representante legal" class="campos_edi" placeholder="Cedula Representante" required>
                     <br></br>

                    <input name="txtcelrep" id="txtcelrep" value="<?php echo $registro["celRep"];?>" title="Se requiere celular representante legal" class="campos_edi" placeholder="Representante Legal" required>
                   
                    <br></br>
                 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">



    </fieldset>
  </form>
</div>
 
 <?php

}    
?>

<button id="create-user">Create new user</button>

 
 
</body>
</html>