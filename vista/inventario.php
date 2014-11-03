<?php

session_start();

if ($_SESSION['administrador']=="si") {
  
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
  <link rel="stylesheet" href="css/tabla_inventario.css">

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet"> 

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->

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

  <div class="">

   <div class="contenido">

   <div id="tabla">
     <div id="page-wrap">
     <input type="button" value="Aprovadas" class="btn" onclick="aprovadas()" id="aprovadas" >
     <input type="button" value="Rechazadas" class="btn" onclick="rechazadas()" id="rechazada" >
     <input type="button" value="En Espera" class="btn" onclick="espera()" id="en_espera" style="display:none;" >

<div id="tabla_espera">
      <center> 
        <h2>Solicitud de Reserva</h2>
      </center>
      <input type="button" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

      <input type="button" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

      <input type="input" placeholder="Codigo Producto a Buscar" class="campo" id="buscar_" style="display:none">
      <br></br>
<form>
      <table>
        <thead>
          <tr>
            <th> Codigo </th>
            <th> Usuario </th>
            <th> Cantidad </th>
            <th> Descripcion </th>
            <th> V. Costo </th>
            <th> Medida </th>
            <th> Existencia </th>
            <th> Reserva </th>
            <th>Disponible</th>
            <th>Estado</th>
            <th> Confirmar </th>
            <th> Rechazar </th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php
            $i=0;
            $j=1;
            require_once("php/lista_reserva.php");
            foreach ($consulta as $registro) {
              $codigo=$registro['codigo'];
              require("php/r_producto.php");
              $existencia=$registro_1['existencia'];
              $reserva=$registro_1['reserva'];
              $disponible=$existencia-$reserva;
              ?>
                
              <tbody>
                <tr>
                  <td class="codigo"><?php echo $registro["codigo"];?></td>
                  <td><?php echo $registro["usuario"];?></td>
                  <td><?php echo $registro["cantidad"];?></td>
                  <td><?php echo $registro_1["descripcion"];?></td>
                  <td><?php echo $registro_1["v_costo"];?></td>
                  <td><?php echo $registro_1["medida"];?></td>
                  <td><?php echo $registro_1["existencia"];?></td>
                  <td><?php echo $registro_1["reserva"];?></td>
                  <td><?php echo $disponible;?></td>
                  <td><?php echo $registro["estado"];?></td>
                  
                  <td><center><input  type="button"   data-idproducto="<?php echo $registro_1['id_producto'];?>" data-codigo="<?php echo $registro['id_consecutivo'];?>" data-cantidad="<?php echo $registro['cantidad'];?>" class="btnconfirmar" value="Confirmar"></center></td>
                  <td><center><input  type="button"   data-idproducto="<?php echo $registro_1['id_producto'];?>" data-codigo="<?php echo $registro['id_consecutivo'];?>" class="btnrechazar" value="Rechazar"></center></td>
                </tr>
              </tbody>
              <?php
             $i++;
            }    
            ?>
          </tr>
        </tbody>
      </table>
      </form>
    </div>
<div id="tabla_aprovada" style="display:none;">
  <center><h2 class="reservas">Reservas Aprovadas</h2></center>
<table>

  <br></br>
        <thead>
          <tr>
            <th> Codigo </th>
            <th> Usuario </th>
            <th> Cantidad </th>
            <th> Descripcion </th>
            <th> V. Costo </th>
            <th> Medida </th>
            <th> Existencia </th>
            <th> Reserva </th>
            <th>Disponible</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php
            require_once("php/lista_reserva_aprovada.php");
            foreach ($consulta as $registro) {
              $codigo=$registro['codigo'];
              require("php/r_producto.php");
              $existencia=$registro_1['existencia'];
              $reserva=$registro_1['reserva'];
              $disponible=$existencia-$reserva;
              ?>
                
              <tbody>
                <tr>
                  <td class="codigo"><?php echo $registro["codigo"];?></td>
                  <td><?php echo $registro["usuario"];?></td>
                  <td><?php echo $registro["cantidad"];?></td>
                  <td><?php echo $registro_1["descripcion"];?></td>
                  <td><?php echo $registro_1["v_costo"];?></td>
                  <td><?php echo $registro_1["medida"];?></td>
                  <td><?php echo $registro_1["existencia"];?></td>
                  <td><?php echo $registro_1["reserva"];?></td>
                  <td><?php echo $disponible;?></td>
                  <td><?php echo $registro["estado"];?></td>
                </tr>
              </tbody>
              <?php
             $i++;
            }    
            ?>
          </tr>
        </tbody>
      </table>
</div>
<div id="tabla_rechazada" style="display:none;">
      <center><h2 class="reservas">Reservas Rechazadas</h2></center>
      <br></br>
<table>
        <thead>
          <tr>
            <th> Codigo </th>
            <th> Usuario </th>
            <th> Cantidad </th>
            <th> Descripcion </th>
            <th> V. Costo </th>
            <th> Medida </th>
            <th> Existencia </th>
            <th> Reserva </th>
            <th>Disponible</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php
            require_once("php/lista_reserva_rechazada.php");
            foreach ($consulta as $registro) {
              $codigo=$registro['codigo'];
              require("php/r_producto.php");
              $existencia=$registro_1['existencia'];
              $reserva=$registro_1['reserva'];
              $disponible=$existencia-$reserva;
              ?>
                
              <tbody>
                <tr>
                  <td class="codigo"><?php echo $registro["codigo"];?></td>
                  <td><?php echo $registro["usuario"];?></td>
                  <td><?php echo $registro["cantidad"];?></td>
                  <td><?php echo $registro_1["descripcion"];?></td>
                  <td><?php echo $registro_1["v_costo"];?></td>
                  <td><?php echo $registro_1["medida"];?></td>
                  <td><?php echo $registro_1["existencia"];?></td>
                  <td><?php echo $registro_1["reserva"];?></td>
                  <td><?php echo $disponible;?></td>
                  <td><?php echo $registro["estado"];?></td>
                </tr>
              </tbody>
              <?php
             $i++;
            }    
            ?>
          </tr>
        </tbody>
      </table>
    </div>
      <br></br> 

    </div>


  </div>






</div>
<span id="respuesta"></span>
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
<script type="text/javascript" src="js/formulario_inventario.js"></script>
<script type="text/javascript" src="js/buscar.js"></script>
<script type="text/javascript" src="js/mostrar_ocultar.js"></script>

</body>

</html>
<?php

}else {

  header("location:login.html");
}

?>