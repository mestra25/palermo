jQuery(document).ready(function() {  

    $(".btnconfirmar").click(function() {
      alert("hola");
     var _reserva=$(this).attr("data-cantidad");
     var _id_producto=$(this).attr("data-codigo");

     alert(_reserva);
     var producto='../controladores/producto.php?action=Reservar';
     var movimiento='../controladores/movimiento_inventario.php?action=Confirmar';

     $.ajax({
      type :"POST",
      url : producto,
      data :{id_producto : _id_producto , reserva : _reserva},
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });

     $.ajax({
      type :"POST",
      url : movimiento,
      data :{ id_producto : _id_producto }

    });

    });
    });

