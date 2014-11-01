jQuery(document).ready(function() {  

    $("#reservar").click(function() {

     var _cliente=$("#txtcliente").val();
     var _reserva=$("#txtreservar").val();
     var _id_usuario=$("#txtid_usuario").val();
     var _id_producto=$("#txtidproducto").val();
     var parametros={ cliente : _cliente, reserva : _reserva, id_usuario: _id_usuario, id_producto : _id_producto };
     var archivo='../controladores/movimiento_inventario.php?action=GuardarUsuario';
    
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });
    });
    });

