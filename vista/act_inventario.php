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
<link rel="stylesheet" href="css/tabla_productos.css">
  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>
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
            <div>
                <center>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="inventario.php">Reservas</a>
                        </li>
                        <li>
                            <a href="compras.php">Compras</a>
                        </li>
                        <li>
                            <a href="act_inventario.php">Act. Inventario</a>
                        </li>
                        </ul>
                </center>
            </div>
        </div>

    </div><!-- end contenedor-->
  <div class="">

   <div class="contenido">
<div>
<center>
  <br></br>
<h3>Actualizar inventario</h3>

<br></br>

<select id="movimiento" class="campos _edi">
<option>Tipo de Movimiento</option>
<option value="entrada">Entrada</option>
<option value="salida">Salida</option>
</select>

<br></br>

<div id"mov_entrada">

<h3>Movimiento de Entrada</h3>
<br></br>
<div id="col1">
  <label>Producto:  </label>
<select id="producto" class="campos_edi">
<option>Producto</option>
<?php
require("php/lista_producto.php");
foreach ($consulta as $registro) {
 $id_cat=$registro['id_categoria'];
 $id_sub=$registro['id_subcategoria'];
   
 require("php/p_categoria.php");
 require("php/p_subcategoria.php");
              
echo " <option < value=".$registro['id_producto'].">".$registro_1['descripcion']." ".$registro_2['descripcion']." ".$registro['descripcion']."</option>";
}
?>
</select>
<input hidden type="text" id="txtid_producto">

<input hidden type="text" value="<?php echo $_SESSION['cedula']; ?>" id="txtid_usuario">

<br></br>
<label>Existencia:  </label><input readonly id="txtexistencia" class="campos_edi" type="text" value="" >
<br></br>
<label>Ingresa:  </label><input class="campos_edi" type="text" name="txtingresa" id="txtingresa">
</div>
<br></br>
<input type="button" value="Actualizar" id="act_inv" class="btn">
<input type="button" value="Cancelar" id="can_inv" class="btn">

<br></br>
</center>
</div>


<div id"mov_salida">

<br></br>
<center>
  <h3>Movimiento de Salida</h3>
  <br></br>
<div id="col1">
         <?php
         require_once("php/lista_cliente.php");
         ?>
         <label>Cliente: </label>
      <select id="txtcliente" title="Se requiere un Cliente" required class="campos">          
        <option value="">Cliente</option>
        <?php
        foreach ($consulta as $registro) {
         echo " <option value=".$registro['cedula'].">".$registro['nombre'].' '.$registro['apellido']."</option>";
       }
       ?>
     </select> 
     <br></br>
</div>
</center>
 <div id="page-wrap">
  <form>
<table id="tabla">
    <thead>
      <tr>
        <th>Añadir</th>
        <th>Codigo</th>
        <th>Categoria</th>
        <th>Subcategoria</th>
        <th>Descripcion</th>
        <th>Proveedor</th>
        <th>V. Costo</th>
        <th>Venta 1</th>
        <th>Venta 2</th>
        <th>Venta 3</th>
        <th>Venta 4</th>
        <th>P. Utilidad</th>
        <th>Medida</th>
        <th>P. Descuento</th>
        <th>Existencia</th>
        <th>Observaciones</th>

      </tr>
    </thead>
    <tbody>
      <tr>

        <?php
        require("php/lista_producto.php");
        foreach ($consulta as $registro) {
        $id_cat=$registro['id_categoria'];
        $id_sub=$registro['id_subcategoria'];
        $id_prove=$registro['id_proveedor'];
        $id_medi=$registro['medida'];
          ?>
          <tbody>
              <td><center><input class="vender"  type="button" data-descripcion="<?php echo $registro['descripcion']; ?>"  data-idproducto="<?php echo $registro['id_producto']; ?>" value="boton"></center></td>
              <td class="codigo"><?php echo $registro["codigo"];?></td>
              <?php
              require("php/p_categoria.php");
              ?>
              <td><?php echo $registro_1["descripcion"];?></td>
              <?php
              require("php/p_subcategoria.php");
              ?>
              <td><?php echo $registro_2["descripcion"];?></td>
              <?php
              require("php/p_proveedor.php");
              ?>
              <td><?php echo $registro["descripcion"];?></td>
              <td><?php echo $registro_3["nombre_empresa"];?></td>
              <td><?php echo $registro["v_costo"];?></td>
              <td><?php echo $registro["venta_1"];?></td>
              <td><?php echo $registro["venta_2"];?></td>
              <td><?php echo $registro["venta_3"];?></td>
              <td><?php echo $registro["venta_4"];?></td>
              <td><?php echo $registro["p_utilidad"];?></td>
              <?php
              require("php/p_medida.php");
              ?>
              <td><?php echo $registro_5["descripcion"];?></td>
              <td><?php echo $registro["p_descuento"];?></td>
              <td><?php echo $registro["existencia"];?></td>
              <td><?php echo $registro["observacion"];?></td>
            </tr>
          </tbody>
          <?php
        }    
        ?>
      </tr>
    </tbody>
  </table>
  </form>
</div>
<center>


<fieldset id="fs">

</fieldset>



<div id="col2">
<input hidden type="text" id="txtid_producto">
<input type="button" value="Vender" id="ven_inv" class="btn">
<input type="button" value="Cancelar" id="can_inv" class="btn">
<br></br>
</div>

</center>
</div>

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

<script type="text/javascript" src="js/buscar.js"></script>
<script type="text/javascript" src="js/mostrar_ocultar.js"></script>
</body>

</html>
<?php

}else {

  header("location:login.html");
}

?>