
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guardar checkbox</title>
</head>

<body>
<table border="1">
  <tr>
    <td colspan="2">Compras</td>
    
  </tr>
  <tr>
    <td><label for="name">Proveedor:  </label></td>
    <td> <select id="txtid_proveedor" title="Se requiere un Proveedor" required class="campos_edi">          

        <option value="" >Seleccionesun proveedor</option>
       <option value="nueva_proveedor">Nuevo Proveedor</option>

        <?php
        require("php/lista_proveedor.php");

        foreach ($consulta as $registro) {

         echo " <option value=".$registro['id_proveedor'].">".$registro['nombre_empresa']."</option>";
       }
       ?>

     </select>  </td>
  </tr>
  <tr>
    <td>Productos</td>
    <td> <a href="">Mas Productos<img src=""></a></td>
     <td> <?php
			require("php/lista_producto.php");
			foreach ($consulta as $registro)
			 {
			 $id_cat=$registro['id_categoria'];
			 $id_sub=$registro['id_subcategoria'];
			   
			 require("php/p_categoria.php");
			 require("php/p_subcategoria.php");
			 echo " <input name='checkbox[]' type='checkbox' value=".$registro_1['descripcion']." ".$registro_2['descripcion']." ".$registro['descripcion']."/>";             
			
			}
			?></td>
  </tr>
</table>

 

</body>
</html>