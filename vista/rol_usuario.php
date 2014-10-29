<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DataSistemas</title>
  <link rel="stylesheet" href="css/tabla_inventario.css">

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
              <a href="inventario.php">Inventario</a>
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
     
     <!-- Formulario para Usuario  -->

     <form id="formulario_usuario" >
      
       <div id="tabla">
         <div id="page-wrap">
          <center> 
            <h2>Lista de Productos</h2>
          </center>
          <input type="button" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

          <input type="button" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

          <input type="input" placeholder="Codigo Producto a Buscar" class="campo" id="buscar_" style="display:none">
          <br></br>

          <table id="tabla">
            <thead>
              <tr>
                <th> Reservar </th>
                <th> Codigo </th>
                <th> Descripcion </th>
                <th> V. Costo </th>
                <th> Venta 1 </th>
                <th> Venta 2 </th>
                <th> Venta 3 </th>
                <th> Venta 4 </th>
                <th> Medida </th>
                <th> Existencia </th>
                <th> Reserva </th>
                <th> Observaciones </th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <?php
                require("php/lista_producto.php");

                foreach ($consulta as $registro) {

                  ?>
                  <tbody>
                    <tr>
                      <td><a name="id_producto" href="reserva.php?id_producto=<?php echo $registro['id_producto']; ?>" onclick="reservar()"><img src="img/reserva.png"></a></td>
                      <td class="codigo"><?php echo $registro["codigo"];?></td>
                      <td><?php echo $registro["descripcion"];?></td>
                      <td><?php echo $registro["v_costo"];?></td>
                      <td><?php echo $registro["venta_1"];?></td>
                      <td><?php echo $registro["venta_2"];?></td>
                      <td><?php echo $registro["venta_3"];?></td>
                      <td><?php echo $registro["venta_4"];?></td>
                      <td><?php echo $registro["medida"];?></td>
                      <td><?php echo $registro["existencia"];?></td>
                      <td><?php echo $registro["reserva"];?></td>
                      <td><?php echo $registro["observacion"];?></td>

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
<script type="text/javascript" src="js/formulario_rol_usuario.js"></script>
<script type="text/javascript" src="js/buscar.js"></script>

</body>

</html>
