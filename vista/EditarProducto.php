<?php

session_start();

if ($_SESSION['administrador']=="si") {
  

require_once("../modelo/conexion.php");

  $result = "";
  $row = null;
  $conn  = new conexion();

  if (isset($_GET['id_producto'])) {

    $sql = 'SELECT * FROM producto WHERE id_producto = ?';
    $stmt = $conn->prepare($sql);
    $results = $stmt->execute(array($_GET['id_producto']));
    $row = $stmt->fetch();

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
    <link rel="stylesheet" href="css/tabla_categoria.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="js/formulario_producto.js"></script>
    <script src="js/jquery.mockjax.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>  
<script type="text/javascript" src="js/codigo.js"></script>
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
  <br></br>
<h2>Editar Producto</h2>
</center>
    <div>
   
  <?php
    // If there are no records.
    if(!empty($result)){ 
      echo $result;
    }else{
  ?>
   <center>
        <form id="editarProd">
 <h4>Codigo del Producto<input readonly type="text" id="codigo_producto" value="<?php echo $row['codigo'];?>" name="codigo_producto" ></h4>
 <div id="col1">           
<br></br>              
<label for="name">Categoria:  </label>
<select id="txtid_categoria" title="Se requiere Seleccion de Categoria" required class="campos">          
    <?php
    require("php/lista_categoria_editar.php")
    ?>
    <option value="<?php echo $registro['id_categoria'];?>"><?php echo $registro['descripcion'];?></option>
    <?php
    require("php/lista_categoria.php");

    foreach ($consulta as $registro) {

       echo " <option value=".$registro['id_categoria'].">".$registro['descripcion']."</option>";
   }
   ?>

</select>  

         <br></br>              

 <label for="name">Subcategoria:  </label>        
         <select id="txtid_subcategoria" title="Se requiere Seleccion de Subcategoria" required class="campos">          
    <?php
    require("php/lista_subcategoria_editar.php")
    ?>
    <option value="<?php echo $row['id_subcategoria'];?>"><?php echo $registro['descripcion'];?></option>
          <?php
          require("php/lista_subcategoria.php");
          
          foreach ($consulta as $registro) {

           echo " <option value=".$registro['id_subcategoria'].">".$registro['descripcion']."</option>";

         }
         ?>

       </select>
       <br></br>              

 <label for="name">Proveedor:  </label>      
       <select id="txtid_proveedor" title="Se requiere un Proveedor" required class="campos">          

    <?php
    require("php/lista_proveedor_editar.php")
    ?>
    <option value="<?php echo $row['id_proveedor'];?>"><?php echo $registro['nombre_empresa'];?></option>

        <?php
        require("php/lista_proveedor.php");

        foreach ($consulta as $registro) {

         echo " <option value=".$registro['id_proveedor'].">".$registro['nombre_empresa']."</option>";
       }
       ?>
     </select> 
     <br></br>  
     <label for="name">Medida:  </label> 
     <select id="txtid_medida" title="Se requiere una Medida" required class="campos">          
    <?php
    require("php/lista_medida_editar.php")
    ?>
    <option value="<?php echo $registro['id_medida'];?>"><?php echo $registro['descripcion'];?></option>

        <?php
        require("php/lista_medida.php");

        foreach ($consulta as $registro) {

         echo " <option value=".$registro['id_medida'].">".$registro['descripcion']."</option>";
       }
       ?>
     </select>   
     <br></br>                      
            <input hidden type="text" name="txtincrementable" id="txtincrementable" value="<?php echo $row['id_producto']; ?>">
            <input  hidden id="txtid_producto" name="txtid_producto" value="<?php echo $row['id_producto'];?>" >
            <label for="name">Descripcion:  </label>     
            <input class="campos_edi"  id="txtdescripcion" name="txtdescripcion" value="<?php echo $row['descripcion'];?>" >
            <br></br> 
            <label for="name">V. Costo:  </label>
            <input class="campos_edi"  id="txtvcosto" name="txtvcosto" value="<?php echo $row['v_costo'];?>" >
            <br></br> 
            <label for="name">Venta 1:  </label>
            <input class="campos_edi"  id="txtventa1" name="txtventa1" value="<?php echo $row['venta_1'];?>" >
            <br></br> 
            <label for="name">Venta 2:  </label>
            <input class="campos_edi"  id="txtventa2" name="txtventa2" value="<?php echo $row['venta_2'];?>" >
            <br></br> 
            </div>
            <div id="col2">
            <label for="name">Venta 3:  </label>
            <input class="campos_edi"  id="txtventa3" name="txtventa3" value="<?php echo $row['venta_3'];?>" >
            <br></br> 
            <label for="name">Venta 4:  </label>
            <input class="campos_edi"  id="txtventa4" name="txtventa4" value="<?php echo $row['venta_4'];?>" >
            <br></br> 
            <label for="name">P. Utilidad:  </label>
            <input class="campos_edi"  id="txtp_utilidad" name="txtp_utilidad" value="<?php echo $row['p_utilidad'];?>" >
            <br></br>
            <label for="name">P. Descuento:  </label>
            <input class="campos_edi"  id="txtp_descuento" name="txtp_descuento" value="<?php echo $row['p_descuento'];?>" >
            <br></br> 
            <label for="name">Stock Min:  </label>
            <input class="campos_edi"  id="txtstock_min" name="txtstock_min" value="<?php echo $row['stock_min'];?>" >
            <br></br> 
            <label for="name">Stock Max:  </label>
            <input class="campos_edi"  id="txtstock_max" name="txtstock_max" value="<?php echo $row['stock_max'];?>" >
            <br></br> 
            <label for="name">Observaciones:  </label>
            <input class="campos_edi"  id="txtobservacion" name="txtobservacion" value="<?php echo $row['observacion'];?>" >
            <br></br> 
            </div>
            <center>
            <input id="btn-boton" type="submit"  value="Editar" >
            <a id="btn-boton" href="productos.php">Cancelar</a>
             <br></br>              
</center>
        </form>
        </center>
        <span id="rpt"></span>
</div>


</div>
</div>

<?php
}
?>
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



<?php

}else {

  header("location:login.html");
}

?>