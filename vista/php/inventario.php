<?php 
require_once("../../modelo/conexion.php");
$id=$_GET['id_producto'];
$conexion = new conexion();
$consulta = $conexion->prepare('SELECT * FROM producto where id_producto="'.$id.'"');
$consulta->execute();
$registro = $consulta;
foreach ($consulta as $registro) {
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
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/tabla_productos.css">
  <script type="text/javascript" src="../js/jquery-1.11.0.js"></script>
  <script src="../js/formulario_producto.js"  type="text/javascript"></script>

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
  <div class="brand" id="img"><a href=""><img src="../img/logo.png"></a></div>
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
              <a href="../index.html">Inicio</a>
            </li>
            <li>
              <a href="../administrar.html">Administrar</a>
            </li>
            <li>
              <a href="../usuarios.php">Usuarios</a>
            </li>
            <li>
              <a href="../inventario.php">Inventario</a>
            </li>
            <li>
              <a href="../clientes.php">Clientes</a>
            </li>
          </ul>
        </div>
      </center>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>



  <div class="contenido">

    <center>

      <div id="formulario">
<br></br> 
        <h2>Realizar Movimiento</h2>

        <form>
       <select id="txtmedida" class="campos">
       	<option></option>

       </select>
       <br></br> 
        <p>Existencia:  <input type="text" name="txtexistencia" class="campos_edi" id="txtexistencia" value="<?php echo $registro['existencia']?>" readonly></p>
 	     <br></br> 
       <p>Impuesto:  <input type="text" name="txtimpuesto" id="txtimpuesto" value="" class="campos_edi"></p>
       <br></br>
       <p>Reserva:  <input type="text" name="txtreserva" id="txtreserva" class="campos_edi" value="<?php echo $registro['reserva']?>" readonly></p>
 	     <br></br> 
       <p>Categoria:  <input type="text" name="txtcategoria" id="txtcategoria" value="<?php echo $registro['']?>" class="campos_edi" readonly></p>
       <br></br>
       <p>Subcategoria:  <input type="text" name="txtsubcategoria" id="txtsubcategoria" value="<?php echo $registro['']?>" class="campos_edi" readonly></p>
       <br></br>
       <p>Proveedor:  <input type="text" name="txtproveedor" id="txtproveedor" value="<?php echo $registro['']?>" class="campos_edi" readonly></p>
       <br></br> 
       <p>Descripcion:  <input type="text" name="txtdescripcion" id="txtdescripcion" value="<?php echo $registro['descripcion']?>" class="campos_edi" readonly></p>
       <br></br> 
       <p>P. Venta 1: <input type="text" name="txtventa1" id="txtventa1" value="<?php echo $registro['venta_1']?>" class="campos_edi" readonly></p>
       <br></br> 
       <p>P. Venta 2: <input type="text" name="txtventa2" id="txtventa2" value="<?php echo $registro['venta_2']?>" class="campos_edi" readonly></p>
       <br></br> 
       <p>P. Venta 3: <input type="text" name="txtventa3" id="txtventa3" value="<?php echo $registro['venta_3']?>" class="campos_edi" readonly></p>
       <br></br> 
       <p>P. Venta 4: <input type="text" name="txtventa4" id="txtventa4" value="<?php echo $registro['venta_4']?>" class="campos_edi" readonly></p>
       <br></br> 
       
       <input type="button" id="btn" value="Guardar"  class="btn">
       <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">

     </form>
   </div>
   
  <br></br>
</center>
</div>


<span id="respuesta"></span>


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
<script src="../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
        interval: 5000 //changes the speed
      })
</script>
<script type="text/javascript" src="../js/validar.js"></script>
<script type="text/javascript" src="../js/mostrar_ocultar.js"></script>
<script type="text/javascript" src="../js/buscar.js"></script>
</body>

</html>
