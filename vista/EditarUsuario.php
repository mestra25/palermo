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
  <link rel="stylesheet" href="css/tabla_usuario.css">


  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
  <script src="js/formulario_usuario.js"  type="text/javascript"></script>
   <script src="js/jquery.mockjax.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>  


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
  <div class="brand"><a href=""><img src="img/logo.png"></a></div>

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
              <a href="cliente.php">Clientes</a>
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

  <div class="container">

    <div class="contenido">

     <center>
  <?php
    // If there are no records.
    if(!empty($result)) :
      echo $result;
    else :
  ?>
    <center>
        <div id="formulario">
 <br></br>  
          <h2>Editar Usuario</h2>

        <form id="formEditar">
            
     <div id="col1">
            <br></br>  
            <label for="name">Cedula:  </label>
            <input readonly class="campos_edi" name="txtcedula" id="txtcedula"  value="<?php echo $row['cedula'];?>">
            <br></br> 
            <label for="name">Nombre:  </label>
            <input class="campos_edi" name="txtnombre" id="txtnombre" value="<?php echo $row['nombre'];?>">
            <br></br>
            <label for="name">Apellido:  </label>
            <input class="campos_edi" name="txtapellido" id="txtapellido"  value="<?php echo $row['apellido'];?>">
            <br></br> 
            <label for="name">Celular:  </label>
            <input class="campos_edi" name="txtcelular" id="txtcelular"  value="<?php echo $row['celular'];?>">
            <br></br> 
            <label for="name">Direccion:  </label>
            <input class="campos_edi" name="txtdireccion" id="txtdireccion"  value="<?php echo $row['direccion'];?>">
            <br></br> 
            <label for="name">E-mail:  </label>
            <input class="campos_edi" name="txtemail" id="txtemail"  value="<?php echo $row['email'];?>">
            <br></br>
            
            <br></br>
</div>
<center>
            <input class="btn" value="Editar" type="submit">
            <a class="btn" id="btn-boton" href="usuarios.php">Cancelar</a>        
            </center>
            <div id="rpt"></div>
            <br></br>
           </form>
        </div>
      </fieldset>

      
    <?php endif;?>





      </center>        
    </div>

    </div><!-- end contenedor-->

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright &copy; Diego Narvaez - Maria Fernanda Mendoza 2014 </p>

          </div>
        </div>
      </div>
    </footer>


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

  </html>
<?php

}else {

  header("location:login.html");
}

?>