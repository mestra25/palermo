<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guardar checkbox</title>
</head>

<body>
<center><h2>Almacenar multiples datos de checkbox en una base de datos</h2></center>
<form action="validar_checkbox.php" method="post">
<table width="28%" border="1" align="center">
  <tr>
    <td width="70%">N° de identificación:</td>
    <td width="30%"><label for="identi"></label>
      <input type="text" name="identi" id="identi" /></td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><input type="text" name="nombre" id="nombre" /></td>
  </tr>
  <tr>
    <td>Proveedor: </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="checkbox[]" type="checkbox" id="checkbox" value="Ciclismo" />
      Ciclismo </td>
    <td><input name="checkbox[]" type="checkbox" id="checkbox" value="Natacion" /> 
      Natación
</td>
  </tr>
  <tr>
    <td><input name="checkbox[]" type="checkbox" id="checkbox" value="futbol" />
      Futbol </td>
    <td><input name="checkbox[]" type="checkbox" id="checkbox" value="atletismo" /> 
      Atletismo
</td>
  </tr>
  <tr>
    <td><input name="checkbox[]" type="checkbox" id="checkbox" value="tenis" /> 
      Tenis
</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
</table>
</form>
<hr width=" 50%"/>


</body>
</html>

           <?php
           require("php/lista_categoria.php");
           
           foreach ($consulta as $registro) {

           echo " <input name='checkbox[]' type='checkbox' value=".$registro['id_categoria']."/>";
           }
           ?>
         </select>  