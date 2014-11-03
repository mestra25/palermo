jQuery(document).ready(function() {  

    $("#reservar").click(function() {

     var _cliente=$("#txtcliente").val();
     var _reserva=$("#txtreservar").val();
     var _usuario=$("#txtid_usuario").val();
     var _id_producto=$("#txtidproducto").val();
     var parametros={ cliente : _cliente, reserva : _reserva, usuario: _usuario, id_producto : _id_producto };
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

