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
    <link rel="stylesheet" href="css/tabla_medida.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="js/formulario_medida.js"></script>

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
                        <a href="administrar.html">Administrar</a>
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
    <div class="botones_form">
        <input type="submit" value="Agregar Medida" class="btn" onclick="mostrar()">

        <input type="submit" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

        <input type="submit" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

        <input type="input" placeholder="Codigo Medida a Buscar" class="campo" id="buscar_" style="display:none">


    </div>

    <div>
       

        <div id="page-wrap">
            <center>
                <h2>Lista de Medidas</h2>
            </center>
            <br></br>
            <table id="tabla">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Eliminar</th>
                    
                </tr>
            </thead>
            
            <tbody>
              <tr>
                 <?php
                 require("php/lista_medida.php");
                 foreach ($consulta as $registro) {
                    ?>
                    <tbody> 

                      <tr>
                        <td class="codigo"><?php echo $registro["id_medida"];?></td>
                        <td><?php echo $registro["descripcion"];?></td>
                        <td><a href="../controladores/medida.php?action=Eliminar&id_medida=<?php echo $registro["id_medida"];?>" onclick="return confirm('Desea eliminar la Medida?');" src="img/delete.png"><img src="img/delete.png"></a></td>

                    </tr>

                </tbody>
                <?php
            }    
            ?>
        </tr>
    </tbody>


</table>

<br></br>
</div>
</div>
<span id="respuesta"></span>
<center>
    <div id="formulario" style="display:none">
        <form>
            <h2>Agregar 
                Medida</h2>
            <br></br>              

            <input id="txtdescripcion" name="txtdescripcion" title="Se requiere descripcion de categoria" class="campos_edi" placeholder="Descripcion" required>
            <br></br> 
            
            <input type="button" name="" value="Guardar" id="btn" class="btn">
            <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
        </form>
    </div>
    <span id="respuesta"></span>
</center>


</div>
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

</body>

</html>



