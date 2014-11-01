<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DataSistemas</title>

    <!-- jQuery Version 1.11.0 -->
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <link rel="stylesheet" href="css/tabla_proveedor.css">
    <link rel="stylesheet" href="css/jquery-ui-1.11.2.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.2.js"  type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.2.js"  type="text/javascript"></script>
    <script src="js/jquery-ui-1.11.2.js"  type="text/javascript"></script>
    <script src="js/editar.js"  type="text/javascript"></script>
    <script src="js/formulario_proveedor.js"  type="text/javascript"></script>
    

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
        <input type="submit" value="Agregar Provedor" class="btn" onclick="mostrar()">

        <input type="submit" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >
        
        <input type="submit" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >
        
        <input type="input" placeholder="Codigo Provedor a Buscar" class="campo" id="buscar_" style="display:none">


    </div>

    <center>
        <div id="formulario" style="display:none">
            <form>
                <h2>Agregar Proveedor</h2>
                <br></br>              
                <div id="col1">
                <label for="name">Nit:  </label>
                <input name="txtnit" id="txtnit" pattern="[A-Za-z]{3}" title="3 primeras letras de tu pais" class="campos_edi" placeholder="Nit" required>
                <br></br> 
                <label for="name">Nombre:  </label>
                <input name="txtnombre_empresa" id="txtnombre_empresa" title="Se requiere Nombre de la empresa" class="campos_edi" placeholder="Nombre de la Empresa" required>
                <br></br>
                <label for="name">Direccion:  </label>
                <input name="txtdireccion" id="txtdireccion" title="Se requiere direccion" class="campos_edi" placeholder="Direccion" required>
                <br></br> 
                <label for="name">Telefono:  </label>
                <input name"txttelefono" id="txttelefono" title="Se requiere telefono" onkeydown="" type="text" class="campos_edi" placeholder="Telefono" required>
                <br></br> 
                <label for="name">E-mail:  </label>
                <input name="txtemail" id="txtemail" title="Se requiere e-mail" class="campos_edi" placeholder="E-mail" required>
                <br></br>
                <label for="name">Web:  </label>
                <input name="txtweb" id="txtweb" title="Se requiere direccion web" class="campos_edi" placeholder="Web" required>
                </div>
                <div id="col2">
                <label for="name">Contacto:  </label>
                <input name="txtcontac" id="txtcontac" title="Se requiere datos de contacto" class="campos_edi" placeholder="Contacto" required>
                <br></br>
                <label for="name">N. Contacto:  </label>
                <input name="txtnumcontac" id="txtnumcontac" title="Se requiere datos de numero contacto" class="campos_edi" placeholder="Numero Contacto" required>
                <br></br>
                <label for="name">R. Legal:  </label>
                <input name="txtreplegal" id="txtreplegal" title="Se requiere nombre representante legal" class="campos_edi" placeholder="Nombre Representante Legal" required>
                <br></br>
                <label for="name">Ced. R. legal:  </label>
                <input  name="txtcedrep" id ="txtcedrep"title="Se requiere cedula representante legal" class="campos_edi" placeholder="Cedula Representante Legal" required>
                <br></br>
                <label for="name">Cel. R. Legal:  </label>
                <input name="txtcelrep" id="txtcelrep" title="Se requiere celular representante legal" class="campos_edi" placeholder="Celular Representante Legal" required>
                <br></br>
                <br></br>
                </div>
                <center>
                <input type="button" name="btnguardar" value="Guardar"  id="btn" class="btn">
                <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
                </center>
                <div id="respuesta"></div>
            </form>
        </div>


        <div id="page-wrap">
          <h2>Lista de Proveedor</h2>


          <br></br>
          <table id="tabla">
            <thead>
              <tr>
               <th>Nit</th>
               <th>Nombre Proveedor</th>
               <th>Direccion</th>
               <th>Telefono</th>
               <th>E-mail</th>
               <th>Web</th>
               <th>Contacto</th>
               <th>Num Contacto</th>
               <th>R. Legal</th>
               <th>Cedula R. Legal</th>
               <th>Celular R. Legal</th>
               <th>Modificar</th>
               <th>Eliminar</th>

           </tr>
       </thead>
       <tbody>
          <tr>
           <?php
           require("php/lista_proveedor.php");
           
           foreach ($consulta as $registro) {
             
            ?>
            <tbody>
              <tr>
                 <td class="codigo"><?php echo $registro["nit"];?></td>
                 <td><?php echo $registro["nombre_empresa"];?></td>
                 <td><?php echo $registro["direccion"];?></td>
                 <td><?php echo $registro["telefono"];?></td>
                 <td><?php echo $registro["email"];?></td>
                 <td><?php echo $registro["web"];?></td>
                 <td><?php echo $registro["contac"];?></td>
                 <td><?php echo $registro["numcontac"];?></td>
                 <td><?php echo $registro["replegal"];?></td>
                 <td><?php echo $registro["cedRep"];?></td>
                 <td><?php echo $registro["celRep"];?></td>
                 <td><a  href="EditarProveedor.php?nit=<?php echo $registro["nit"];?>" ><img src="img/editar.png"></a></td>
                 <td><a  href="../controladores/proveedor.php?action=Eliminar&nit=<?php echo $registro["nit"];?>" onclick="return confirm('Desea eliminar el articulo?');" ><img src="img/delete.png"></td>
                 
             </td>
         </tr>

     </tbody>
     
     <?php

 }    
 ?>
</tr>
</tbody>

</table>

</div>
</center>
<br></br>

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
<script type="text/javascript" src="js/validar.js"></script>



</body>

</html>



