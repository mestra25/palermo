jQuery(document).ready(function() {  

    $("#reservar").click(function() {
     var _reserva=$("#txtreservar").val();
     var _id_producto=$("#txtidproducto").val();
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

