<?php

session_start();

if ($_SESSION['administrador']=="si") {
  


require_once("../modelo/conexion.php");
  $result = "";
  $row = null;
  $conn  = new conexion();
  // If 'buscar' is in the array $_POST proceed to make the query.
  if (isset($_GET['id_subcategoria'])) {
    // Create the query
    $sql = 'SELECT * FROM subcategoria WHERE id_subcategoria = ?';
    // we have to tell the PDO that we are going to send values to the query
    $stmt = $conn->prepare($sql);
    // Now we execute the query passing an array toe execute();
    $results = $stmt->execute(array($_GET['id_subcategoria']));
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
    <link rel="stylesheet" href="css/tabla_subcategoria.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="js/formulario_subcategoria.js"></script>
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


<div class="contenido">
   <div>
    <center>
        <ul class="nav navbar-nav">
            <li>
                <a href="productos.php">Productos</a>
            </li>
            <li>
                <a href="categoria.php">Categorias</a>
            </li>
            <li>
                <a href="subcategoria.php">Subcategoria</a>
            </li>
            <li>
                <a href="proveedor.php">Proveedor</a>
            </li>
            <li>
                <a href="medida.php">Medida</a>
            </li>
        </ul>
    </center>
</div>
</div>


<div class="">

   <div class="contenido">
    <center>
 <?php
    // If there are no records.
    if(!empty($result)) :
      echo $result;
    else :
  ?>
<br></br> 
    <h2>Editar Subcategoria</h2>

        <form id="editarSub">
            <div id="col1">
            <input hidden readonly class="campos_edi" id="txtid_subcategoria" name="txtid_subcategoria" value="<?php echo $row['id_subcategoria'];?>" >
            <input hidden readonly class="campos_edi" id="txtid_categoria" name="txtid_categoria" value="<?php echo $row['id_categoria'];?>" >
            <label for="name">Descripcion:  </label>
            <input class="campos_edi" id="txtdescripcion" name="txtdescripcion" value="<?php echo $row['descripcion'];?>" >
            <br></br> 
            <label for="name">Observacion:  </label>
            <input class="campos_edi" id="txtobservacion" name="txtobservacion" value="<?php echo $row['observacion'];?>">
            <br></br> 
            <input type="submit" value="Editar" >
            <a id="btn-boton" href="subcategoria.php">Cancelar</a>
                        <br></br> 
</div>
        <span id="rpt"></span>
        </form>
        
         

      
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

</body>

</html>



<?php

}else {

  header("location:login.html");
}

?>