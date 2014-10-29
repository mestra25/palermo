jQuery(document).ready(function() {  

    $("#btnconfirmar").click(function() {
     var _reserva=$("#txtcantidad").val();
     var _id_producto=$("#txtcodigo").val();
     var parametros={ reserva : _reserva, id_producto : _id_producto };
     var archivo='../controladores/producto.php?action=Reservar';
    
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

