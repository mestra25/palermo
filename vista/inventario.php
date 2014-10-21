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

    <!-- Fonts -->
    

</head>

<body>

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
                            <a href="administrar.html">Administrar</a>
                        </li>
                        <li>
                            <a href="usuarios.php">Usuarios</a>
                        </li>
                        <li>
                            <a href="inventario.html">Inventario</a>
                        </li>
                        <li>
                            <a href="clientes.php">Clientes</a>
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
        
        <center><h2>Asignar nueva Tarea</h2>

            <select id="usuario" onchange="mostrar()">

                <option>Seleccione tipo de Usuario</option>
                <option value="usuario">Usuario</option>
                <option value="cliente">Cliente</option>
                
            </select>
        </center>
        
        <select id="id_usuario" onchange="mostrar()">

            <?php
            require("/php/lista_usuario.php");
            
            foreach ($consulta as $registro) {

             echo " <option value=".$registro['cedula'].">".$registro['nombre']."</option>";
         }
         ?>

     </select>

     
     <form id="formulario_cliente">
        <h2>cliente</h2>
    </form>
    <form id="formulario_usuario">
        <h2>usuaio</h2>
    </form>

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
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
<script type="text/javascript" src="js/inventario.js"></script>

</body>

</html>
