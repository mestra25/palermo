<?php

session_start();

if ($_SESSION['administrador']=="si") {
  
require_once("../modelo/conexion.php");
$result = "";
$row = null;
$conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.

if (isset($_GET['cedula'])) {
    // Create the query

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
  <html lang="es">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DataSistemas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tabla_cliente.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
    <script src="js/formulario_cliente.js"  type="text/javascript"></script>

  </head>

  <body>
    <div id="dialogoverlay"></div>
    <div id="dialogbox">
      <div>
        <div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
      </div>
    </div>
    <div class="brand" id="img"><a href=""><img src="img/logo.png"></a></div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
          <a class="navbar-brand" href="index.html">Data Sistemas</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <center>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="index.html">Inicio</a>
              </li>
              <li>
                <a href="administrar.php">Administrar</a>
              </li>
              <li>
                <a href="usuarios.php">Usuarios</a>
              </li>
              <li>
                <a href="inventario.php">Inventario</a>
              </li>
              <li>
                <a href="clientes.php">Clientes</a>
              </li>
              <li>
                            <a href="logout.php">Salir</a>
                        </li>
            </ul>
          </div>
        </center>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div class="">

      <div class="contenido">




        <?php
    // If there are no records.
        if(!empty($result)) :
          echo $result;
        else :
          ?>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>


        <center>
         <br></br>
         <h2>Editar Cliente</h2>

         <form id="dialog"  width ="100px" 
         height="300px" >
         <div>
          <label for="name">Cedula: </label>
          <input type="text" name="txtcedula" id="txtcedula" value="<?php echo $row['cedula'];?>" class="campos_edi" placeholder="cedula" readonly>
          <br></br>
          <label for="nombre_empresa">Nombre: </label>
          <input name="txtnombre" id="txtnombre"  value="<?php echo $row['nombre'];?>" class="campos_edi" placeholder="nombre">
          <br></br>
          <label for="email">Apellido: </label>
          <input type="text" name="txtapellido" id="txtapellido" value="<?php echo $row["apellido"];?>" class="campos_edi" placeholder="apellido">
          <br></br>
          <label for="password">Celular: </label>
          <input type="text" name="txtcelular" id="txtcelular" value="<?php echo $row["celular"];?>" class="campos_edi" placeholder="celular">
          <br></br>
          <label for="password">Direccion: </label>
          <input type="text" name="txtdireccion" id="txtdireccion" value="<?php echo $row["direccion"];?>" class="campos_edi" placeholder="direccion">
          <br></br>
          <label for="password">Email: </label>
          <input name="txtemail" id="txtemail" value="<?php echo $row["email"];?>" title="Se requiere direccion web" class="campos_edi" placeholder="email" required>
          <br></br>
          <input id="btn-boton" type="button" class="btneditar" value="Editar" >
          <a id="btn-boton" href="cliente.php">Cancelar</a>
          <br></br>
          <div id="respuesta"></div>
        </div>
      </form>


    </center>

  </div>

</div><!-- end contenedor-->
<?php endif;?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p>Copyright &copy; Diego Narvaez - Maria Fernanda Mendoza 2014 </p>

      </div>
    </div>
  </div>
</footer>

<!-- jQuery Version 1.11.0 -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
        interval: 5000 //changes the speed
      })
</script>
<script type="text/javascript" src="js/mostrar_ocultar.js"></script>
<script type="text/javascript" src="js/buscar.js"></script>
<script type="text/javascript" src="js/validar.js"></script>

</body>

=======
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
>>>>>>> origin/master
</html>
<?php

}else {

  header("location:login.html");
}

?>