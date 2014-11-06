jQuery(document).ready(function() {

$("#movimiento").change(function(event){

var valor = $(this).val();
if (valor=="entrada") {
	alert("entrada");
document.getElementById('mov_entrada').style.display = 'inline';
	};
 	});

$("#producto").change(function(event){

var _id_producto = $(this).val();

var parametros={ id_producto:_id_producto };
var archivo='../vista/php/act_inventario.php';
if (_id_producto!="") {
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
      	var nuevo = $.parseJSON(datos);
      	$("#existencia").val(nuevo);
        $("#existencia").html(datos);
      }
    });
	};
 	});

});