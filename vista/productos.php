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

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/tabla_productos.css">
  <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>  
<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.2/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.2/jquery-ui.theme.css">
  <script type="text/javascript" src="js/codigo.js"></script>
  <script src="js/formulario_producto.js"  type="text/javascript"></script>
     <script src="js/jquery.mockjax.js"></script>
    <script src="js/jquery.form.js"></script>
    <!-- <script src="js/jquery.js"></script> -->
    <script src="js/jquery.validate.js" type="text/javascript"></script>  
  <script src="js/dialogos.js"  type="text/javascript"></script>

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


    <div class="botones_form">
      <input type="button" value="Agregar Producto" class="btn" onclick="mostrar()">

      <input type="button" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

      <input type="button" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

      <input type="input" placeholder="Codigo Producto a Buscar" class="campo" id="buscar_" style="display:none">


    </div>

    <center>

 <div id="formulario" style="display:none;">
<?php
require("php/estado.php");
?>

        <h2>Agregar Producto</h2>
<h4>Codigo del Producto<input id="codigo_producto" name="txtcodigo_producto" readonly ></h4>
        <form name="formulario" id="guardarProd">

<div id="col1">
  <br></br>

          <label for="name">Categoria:  </label>
          <select id="txtid_categoria" name="categoria" title="Se requiere Seleccion de Categoria" required class="campos_edi">          

           <option value="" >Categoria</option>
           <option value="nueva_categoria">Nueva Categoría</option>
           <?php
           require("php/lista_categoria.php");
           
           foreach ($consulta as $registro) {

           echo " <option value=".$registro['id_categoria'].">".$registro['descripcion']."</option>";
           }
           ?>
           
         </select>  





         <br></br>              
<label for="name">Subcategoria:  </label>
         <select id="txtid_subcategoria" title="Se requiere Seleccion de Subcategoria" required class="campos_edi">          

          <option value="" >Subcategoria</option>
          <option value="nueva_subcategoria">Nueva Subcategoría</option>
          <?php
          require("php/lista_subcategoria.php");
          
          foreach ($consulta as $registro) {

           echo " <option value=".$registro['id_subcategoria'].">".$registro['descripcion']."</option>";

         }
         ?>
         
       </select>


       <br></br>              
<label for="name">Proveedor:  </label>
       <select id="txtid_proveedor" title="Se requiere un Proveedor" required class="campos_edi">          

        <option value="" >Proveedor</option>
        <option value="nueva_proveedor">Nuevo Proveedor</option>
        <?php
        require("php/lista_proveedor.php");

        foreach ($consulta as $registro) {

         echo " <option value=".$registro['id_proveedor'].">".$registro['nombre_empresa']."</option>";
       }
       ?>

       
     </select> 


     <br></br> 
     <label for="name">Medida:  </label>
     <select id="txtid_medida" title="Se requiere una Medida" required class="campos_edi">          

        <option value="" >Medida</option>
        <option value="nueva_medida">Nueva Medida</option>
        <?php
        require("php/lista_medida.php");

        foreach ($consulta as $registro) {

         echo " <option value=".$registro['id_medida'].">".$registro['descripcion']."</option>";
       }
       ?>
       
     </select> 


     <input hidden type="text" name="txtincrementable" id="txtincrementable" value="<?php echo $registro_6['Auto_increment']; ?>">
     <br></br>  
     <label for="name">Descripcion:  </label>                 
     <textarea class="campo_des" id="txtdescripcion" name="txtdescripcion" rows="4" cols="50" placeholder="Descripcion"></textarea>
     <br></br> 
     <label for="name">V. Costo:  </label>
     <input name="txtvcosto" id="txtvcosto" title="Se requiere valor costo" onkeydown="return validarNumeros(event)" type="text" class="campos_edi" placeholder="Valor Costo" required>
     <br></br> 
     <label for="name">Venta 1:  </label>
     <input name="txtventa1" id="txtventa1" title="Se requiere Precio Venta 1" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 1" required>
     <br></br> 
     <label for="name">Venta 2:  </label>
     <input name="txtventa2" id="txtventa2" title="Se requiere Precio Venta 2" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 2" required>
     <br></br>  


       </div> 


     <div id="col2">
      <label for="name">Venta 3:  </label>
      <input name="txtventa3" id="txtventa3" title="Se requiere Precio Venta 3" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 3" required>
     <br></br> 
     <label for="name">Venta 4:  </label>
     <input name="txtventa4" id="txtventa4" title="Se requiere Precio Venta 4" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 4" required>
     <br></br> 
     <label for="name">P. Utilidad:  </label>
     <input name="txtp_utilidad" id="txtp_utilidad" title="Se requiere Porcentaje de Utilidad" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Porcentaje Utilidad" required>
     <br></br>
     <label for="name">Stock Min:  </label>
     <input name="txtstock_min" id="txtstock_min" title="Se requiere Stock Minimo" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Stock Minimo" required>
     <br></br>
     <label for="name">Stock Max:  </label>
     <input name="txtstock_max" id="txtstock_max" title="Se requiere Stock Minimo" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Stock Maximo" required>
     <br></br> 
     <label for="name">Existencia:  </label>
     <input name="txtexistencia" id="txtexistencia" title="Se requiere Cantidad de Producto" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Cantidad de Producto" required>
     <br></br> 
     <label for="name">P. Descuento:  </label>
     <input name="txtp_descuento" id="txtp_descuento" title="Se requiere Porcentaje de Descuento" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Porcentaje Descuento" required>
     <br></br> 
     <label for="name">Observacion:  </label>
     <input name="txtobservacion" id="txtobservacion" title="Se requiere las observaciones" class="campos_edi" placeholder="Observaciones" required>
     <br></br>
     
</div>
<center>
     <input type="button" id="btn" value="Guardar"  class="btn">
     <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
</center>
   </form>
 </div>


 <div id="page-wrap">
  <center> 
    <h2>Lista de Productos</h2>
  </center>
  <br></br>
  <table id="tabla">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Categoria</th>
        <th>Subcategoria</th>
        <th>Proveedor</th>
        <th>Descripcion</th>
        <th>V. Costo</th>
        <th>Venta 1</th>
        <th>Venta 2</th>
        <th>Venta 3</th>
        <th>Venta 4</th>
        <th>P. Utilidad</th>
        <th>Medida</th>
        <th>P. Descuento</th>
        <th>Stock Min</th>
        <th>Stock Max</th>
        <th>F. Creacion</th>
        <th>F. Modificacion</th>
        <th>Existencia</th>
        <th>Reserva</th>
        <th>Observaciones</th>
        <th>Modificar</th>
        <th>Eliminar</th>

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
            <tr>
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
              <td><?php echo $registro_3["nombre_empresa"];?></td>
              <td><?php echo $registro["descripcion"];?></td>
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
              <td><?php echo $registro["stock_min"];?></td>
              <td><?php echo $registro["stock_max"];?></td>
              <td><?php echo $registro["fcreado"];?></td>
              <td><?php echo $registro["fmodificado"];?></td>
              <td><?php echo $registro["existencia"];?></td>
              <td><?php echo $registro["reserva"];?></td>
              <td><?php echo $registro["observacion"];?></td>
              <td><a href="EditarProducto.php?id_producto=<?php echo $registro["id_producto"];?>"><img src="img/editar.png"></a></td>
              <td><a href="../controladores/producto.php?action=Eliminar&id_producto=<?php echo $registro["id_producto"];?>" onclick="return confirm('Desea eliminar el Producto?');" src="img/delete.png"><img src="img/delete.png"></a></td>

            </tr>

          </tbody>
          <?php

        }    
        ?>
      </tr>
    </tbody>
  </table>
</div>
<br></br>
</center>
</div>
</div>

<span hidden id="respuesta"></span>

<div id="dialog-confirm_1" style="display:none;" title="Categoria">
<div id="formulario">
        <form>
          <input type="text" value="1" hidden id="txtnueva" name="txtnueva">
            <h2>Agregar Categoria</h2>
            <br></br>              
            <label for="name">Descripcion:  </label>
            <textarea class="campo_des" id="txtdescripcion_cat" name="txtdescripcion_cat" rows="4" cols="48" placeholder="Descripcion"></textarea>
            <br></br> 
            <label for="name">Observacion:  </label>
            <input id="txtobservacion_cat" name="txtobservacion_cat" title="Se requiere observacion" class="campos" placeholder="Observacion" required>
            <br></br> 
            <center>
            <input type="button" name="" value="Guardar" id="btn_cat" class="btn">
            </center>
        </form>
    </div>
</div>


<div id="dialog-confirm_2" style="display:none;" title="Subcategoria">
<div>
        <form>
          <input type="text" value="1" hidden id="txtnueva" name="txtnueva">

            <h2>Agregar Subcategoria</h2>
            <label for="name">Categoria:  </label>
            <select id="txtid_categoria_sub" title="Se requiere Seleccion de Categoria" required class="campos">          

           <option value="">Categoria</option>
           <?php
           require("php/lista_categoria.php");
           
           foreach ($consulta as $registro) {

             echo " <option value=".$registro['id_categoria'].">".$registro['descripcion']."</option>";
           }
           ?>

         </select> 

            <br></br>              
            <label for="name">Descripcion:  </label>
            <textarea class="campo_des" id="txtdescripcion_sub" name="txtdescripcion_sub" rows="4" cols="48" placeholder="Descripcion"></textarea>
            <br></br> 
            <label for="name">Observacion:  </label>
            <input id="txtobservacion_sub" name="txtobservacion_sub" title="Se requiere observacion" class="campos" placeholder="Observacion" required>
            <br></br> 
            <center>
            <input type="button" name="" value="Guardar" id="btn_sub" class="btn">
            </center>
        </form>
    </div>
</div>

<div id="dialog-confirm_3" style="display:none;" title="Medida">
<div id="formulario">
        <form>
           <input type="text" value="1" hidden id="txtnueva" name="txtnueva">
            <h2>Agregar Medida</h2>
            <br></br>              
            <label for="name">Descripcion:  </label>
            <textarea class="campo_des" id="txtdescripcion_med" name="txtdescripcion_med" rows="4" cols="48" placeholder="Descripcion"></textarea>
            <br></br> 
            <center>
            <input type="button" name="" value="Guardar" id="btn_med" class="btn">
            </center>
        </form>
    </div>
</div>


<div id="dialog-confirm_4" style="display:none;" title="Proveedor">
<div id="formulario">
        <form>
          <center>
           <input type="text" value="1" hidden id="txtnueva" name="txtnueva">
            <h2>Agregar Producto</h2>
                <br></br>              
                <label for="name">Nit:  </label>
                <input name="txtnit_pro" id="txtnit_pro" pattern="[A-Za-z]{3}" title="3 primeras letras de tu pais" class="campos_edi" placeholder="Nit" required>
                <br></br> 
                <label for="name">Nombre:  </label>
                <input name="txtnombre_empresa_pro" id="txtnombre_empresa_pro" title="Se requiere Nombre de la empresa" class="campos_edi" placeholder="Nombre de la Empresa" required>
                <br></br>
                <label for="name">Direccion:  </label>
                <input name="txtdireccion_pro" id="txtdireccion_pro" title="Se requiere direccion" class="campos_edi" placeholder="Direccion" required>
                <br></br> 
                <label for="name">Telefono:  </label>
                <input name"txttelefono_pro" id="txttelefono_pro" title="Se requiere telefono" onkeydown="" type="text" class="campos_edi" placeholder="Telefono" required>
                <br></br> 
                <label for="name">E-mail:  </label>
                <input name="txtemail_pro" id="txtemail_pro" title="Se requiere e-mail" class="campos_edi" placeholder="E-mail" required>
                <br></br>
                <label for="name">Web:  </label>
                <input name="txtweb_pro" id="txtweb_pro" title="Se requiere direccion web" class="campos_edi" placeholder="Web" required>
                <br></br>
                <label for="name">Contacto:  </label>
                <input name="txtcontac_pro" id="txtcontac_pro" title="Se requiere datos de contacto" class="campos_edi" placeholder="Contacto" required>
                <br></br>
                <label for="name">N. Contacto:  </label>
                <input name="txtnumcontac_pro" id="txtnumcontac_pro" title="Se requiere datos de numero contacto" class="campos_edi" placeholder="Numero Contacto" required>
                <br></br>
                <label for="name">R. Legal:  </label>
                <input name="txtreplegal_pro" id="txtreplegal_pro" title="Se requiere nombre representante legal" class="campos_edi" placeholder="Nombre Representante Legal" required>
                <br></br>
                <label for="name">Ced. R.:  </label>
                <input  name="txtcedrep_pro" id ="txtcedrep_pro"title="Se requiere cedula representante legal" class="campos_edi" placeholder="Cedula Representante Legal" required>
                <br></br>
                <label for="name">Cel. R.:  </label>
                <input name="txtcelrep_pro" id="txtcelrep_pro" title="Se requiere celular representante legal" class="campos_edi" placeholder="Celular Representante Legal" required>
                <br></br>
            
            <input type="button" name="" value="Guardar" id="btn_pro" class="btn">
            </center>
        </form>
    </div>
</div>

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

<!-- Script to Activate the Carousel <script src="js/jquery.js"></script> -->
<script>
$('.carousel').carousel({
        interval: 5000 //changes the speed
      })
</script>
<script type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript" src="js/mostrar_ocultar.js"></script>
<script type="text/javascript" src="js/buscar.js"></script>

</body>

</html>
<?php

}else {

  header("location:login.html");
}

?>