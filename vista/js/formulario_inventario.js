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
if (datos=="aprobado") {
       $.ajax({
      type :"POST",
      url : movimiento,
      data :{ codigo: _codigo },
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });

     function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'Producto';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Reserva aprobada Satisfactoriamente');
    var pagina='../vista/inventario.php';
    location.href=pagina;

        
};
$("#respuesta").html(datos);
      }

    });

    });


    $(".btnrechazar").click(function() {

     var _codigo=$(this).attr("data-codigo");
     var movimiento='../controladores/movimiento_inventario.php?action=Rechazar';
     var id=$(this).attr("data-idproducto");
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

