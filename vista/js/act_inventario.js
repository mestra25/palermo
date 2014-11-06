jQuery(document).ready(function() {

  $("#act_inv").click(function() {
    var _id_producto=$("#txtid_producto").val();
    var _existencia= $("#txtexistencia").val();
    var _ingresa=$("#txtingresa").val();
    var d = new Date(); 
    $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
    var _fmodificado=$fecha;

    var parametros={ ingresa:_ingresa, id_producto:_id_producto, existencia:_existencia,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php?action=Actualizar';

        $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
      });


$("#movimiento").change(function(event){

var valor = $(this).val();
if (valor=="entrada") {
	alert("entrada");
document.getElementById('mov_entrada').style.display = 'inline';
	};
 	});

$("#producto").change(function(event){

var _id_producto = $(this).val();
$("#txtid_producto").val(_id_producto);
var parametros={ id_producto:_id_producto };
var archivo='../vista/php/act_inventario.php';
if (_id_producto!="") {
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
      	var nuevo = $.parseJSON(datos);
      	$("#txtexistencia").val(nuevo);
        $("#txtexistencia").html(datos);
      }
    });
	};
 	});

});