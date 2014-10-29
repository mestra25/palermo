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
    <link rel="stylesheet" href="css/tabla_cliente.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.0.js"  type="text/javascript"></script>
    <script src="js/formulario_cliente.js"  type="text/javascript"></script>

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
                                <a href="administrar.html">Administrar</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Usuarios</a>
                            </li>
                            <li>
                                <a href="inventario.php">Inventario</a>
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
                <div class="botones_form">
                    <input type="button" value="Agregar cliente" class="btn" onclick="mostrar()">

                    <input type="button" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

                    <input type="button" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

                    <input type="input" placeholder="Cedula Cliente a Buscar" class="campo" id="buscar_" style="display:none">


                </div>

                <center>
                    <div id="formulario" style="display:none">

                      <h2>Agregar Cliente</h2>

                      <form>

                          <br></br>              

                          <input name="txtcedula" id="txtcedula" title="Se requiere numero de cedula" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Cedula" required>
                          <br></br> 
                          <input name="txtnombre" id="txtnombre" title="Se requiere nombre de cliente" class="campos_edi" placeholder="Nombre" required>
                          <br></br>
                          <input name="txtapellido" id="txtapellido" title="Se requiere apelldido" class="campos_edi" placeholder="Apellido" required>
                          <br></br> 
                          <input name="txtcelular" id="txtcelular" title="Se requiere celular de cliente" class="campos_edi" placeholder="Celular" required>
                          <br></br> 
                          <input name="txtdireccion" id="txtdireccion" title="Se requiere direccion de cliente" class="campos_edi" placeholder="Direccion" required>
                          <br></br> 
                          <input name="txtemail" id="txtemail" title="Se requiere email de cliente" class="campos_edi" placeholder="E-mail" required>
                          <br></br> 
                          <input type="button" name="" value="Guardar" id="btn"  class="btn">
                          <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
                      </form>
                  </div>
<span id="respuesta"></span>
                  <div id="page-wrap">
                      <h2>Lista de Clientes</h2>


                      <br></br>
                      <table id="tabla">
                        <thead>
                          <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Celular</th>
                            <th>Direccion</th>
                            <th>E-mail</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>


                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                                                 <?php
       require("php/lista_cliente.php");
     
       foreach ($consulta as $registro) {
       
        ?>
                        <tbody>
                          <tr>
                           <td class="codigo"><?php echo $registro["cedula"];?></td>
                            <td><?php echo $registro["nombre"];?></td>
                            <td><?php echo $registro["apellido"];?></td>
                            <td><?php echo $registro["celular"];?></td>
                            <td><?php echo $registro["direccion"];?></td>
                            <td><?php echo $registro["email"];?></td>
                           <td><a  href="EditarCliente.php?nit=<?php echo $registro["cedula"];?>" ><img src="img/editar.png"></a></td>
                       <td><a  href="../controladores/cliente.php?action=Eliminar&nit=<?php echo $registro["nit"];?>" onclick="return confirm('Desea eliminar el articulo?');" ><img src="img/delete.png"></td>


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
<script type="text/javascript" src="js/validar.js"></script>

</body>

</html>
