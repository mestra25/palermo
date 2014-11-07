jQuery(document).ready(function() 

{
var cantidad = 0;
$(".vender").click(function() {
  cantidad++;

  var id_producto=$(this).attr("data-idproducto");
  var txtid_producto = document.createElement('input');
  txtid_producto.value=id_producto;
  txtid_producto.type = 'text';
  txtid_producto.name = 'txtidproducto' + cantidad;
  txtid_producto.id = 'txtdescripcipn' + cantidad;
  txtid_producto.class='campos_edi';
  document.getElementById('fs').appendChild(txtid_producto);


  var descripcion=$(this).attr("data-descripcion");
  var txtid_descripcion = document.createElement('input');
  txtid_descripcion.value=descripcion;
  txtid_descripcion.type = 'text';
  txtid_descripcion.name = 'txtidproducto' + cantidad;
  txtid_descripcion.id = 'txtdescripcipn' + cantidad;
  txtid_descripcion.class='campos_edi';
  document.getElementById('fs').appendChild(txtid_descripcion);


  var txtcantidad = document.createElement('input');
  txtcantidad.type = 'text';
  txtcantidad.name = 'txtcantidad' + cantidad;
  txtcantidad.id = 'txtdescripcipn' + cantidad;
  document.getElementById('fs').appendChild(txtcantidad);
  document.getElementById('fs').appendChild(document.createElement('br'));
  document.getElementById('fs').appendChild(document.createElement('br'));


 });
 });