<!DOCTYPE html>
<html lang="en">

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
              <script src="js/jquery-1.11.0.js"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>


 
      </head>

      <body>

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
                        <a href="provedor.php">Proveedor</a>
                    </li>
                </ul>
                </center>
            </div>
</div>
        <div class="container">

          <div class="contenido">


            <div class="botones_form">
              <input type="button" value="Agregar Producto" class="btn" onclick="mostrar()">

              <input type="button" value="Buscar" class="btn" onclick="mostrar_buscar()" id="buscar" >

              <input type="button" value="Cancelar" class="btn" id="cancelar" style="display:none" onclick="mostrar_boton_buscar()" >

              <input type="input" placeholder="Codigo Producto a Buscar" class="campo" id="buscar_" style="display:none">


            </div>

            <center>

              <div id="formulario" style="display:none">

                <h2>Agregar Producto</h2>

                <form>

                  <br></br>              

                  <select title="Se requiere Seleccion de Categoria" required class="campos">          

                   <option value="">Categoria</option>


                 </select>  

                 <br></br>              

                 <select title="Se requiere Seleccion de Subcategoria"< required class="campos">          

                  <option value="" >Subcategoria</option>


                </select>
                 <br></br>              

                <select title="Se requiere un Proveedor"< required class="campos">          

                  <option value="" >Proveedor</option>


                </select>                      

                <br></br> 

                <input type="text" title="Se requiere una descripcion" onkeydown="return validarLetras(event)" name="txtdescripcion" id="txtdescripcion" class="campos_edi" placeholder="Descripcion" required>
                <br></br> 
                <input name="txtvcosto" id="txtvcosto" title="Se requiere valor costo" onkeydown="return validarNumeros(event)" type="text" class="campos_edi" placeholder="Valor Costo" required>
                <br></br> 
                <input name="txtventa1" id="txtventa1" title="Se requiere Precio Venta 1" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 1" required>
                <br></br> 
                <input name="venta2" id="txtventa2" title="Se requiere Precio Venta 2" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 2" required>
                <br></br> 
                <input name="venta3" id="txtventa3" title="Se requiere Precio Venta 3" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 3" required>
                <br></br> 
                <input name="txtventa4" id="txtventa4" title="Se requiere Precio Venta 4" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Precio Venta 4" required>
                <br></br> 
                <input name="txtputilidad" id="txtputilidad" title="Se requiere Porcentaje de Utilidad" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Porcentaje Utilidad" required>
                <br></br> 
                <input name="txtmedida" id="txtmedida" title="Se requiere Unidad de Medida" class="campos_edi" placeholder="Medida" required>
                <br></br> 
                <input name="txtpdescuento" id="txtdescuento" title="Se requiere Porcentaje de Descuento" onkeydown="return validarNumeros(event)" class="campos_edi" placeholder="Porcentaje Descuento" required>
                <br></br> 
                <input name="txtobservacion" id="txtobservacion" title="Se requiere las observaciones" class="campos_edi" placeholder="Observaciones" required>

                <br></br>

                <input type="button" name="" value="Guardar"  class="btn">
                <input type="button" name="" value="Cancelar" class="btn" onclick="ocultar()">
              </form>
            </div>


            <div id="page-wrap">
              <h2>Lista de Productos</h2>

              <br></br>
              <table id="tabla">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>V. Costo</th>
                    <th>Venta 1</th>
                    <th>Venta 2</th>
                    <th>Venta 3</th>
                    <th>Venta 4</th>
                    <th>P. Utilidad</th>
                    <th>P. Descuento</th>
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
                    <tbody>
                      <tr>
                        <td class="codigo">James</td>
                        <td>Matman</td>
                        <td>Chief Sandwich Eater</td>
                        <td>Lettuce Green</td>
                        <td>Trek</td>
                        <td>Digby Green</td>
                        <td>January 13, 1979</td>
                        <td>Gotham City</td>
                        <td>3.1</td>
                        <td>RBX-12</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td><a href=""><img src="img/editar.png"></a></td>
                        <td><a href="" src="img/delete.png"><img src="img/delete.png"></a></td>

                      </tr>

                    </tbody>
                    
                  </tr>
                </tbody>
              </table>
            </div>
            <br></br>
            </center>
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

            <!-- Script to Activate the Carousel -->
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