jQuery(document).ready(function() {  

    $(".btnconfirmar").click(function() {
     var _reserva=$(this).attr("data-cantidad");
     var _id_producto=$(this).attr("data-idproducto");
     var _codigo =$(this).attr("data-codigo");
     var producto='../controladores/producto.php?action=Reservar';
     var movimiento='../controladores/movimiento_inventario.php?action=Confirmar';

     $.ajax({
      type :"POST",
      url : producto,
      data :{ id_producto : _id_producto , reserva : _reserva },
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });

     $.ajax({
      type :"POST",
      url : movimiento,
      data :{ id_producto : _id_producto, reserva : _reserva  , codigo: _codigo },
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });


    });


    $(".btnrechazar").click(function() {

     var _codigo=$(this).attr("data-codigo");
     var movimiento='../controladores/movimiento_inventario.php?action=Rechazar';
     var id=$(this).attr("data-id");
     alert(id);
     $.ajax({
      type :"POST",
      url : movimiento,
      data :{codigo:_codigo },
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });

    });


    });

