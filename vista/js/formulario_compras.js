jQuery(document).ready(function() {  

$(".validar").click(function(){
  var id = $(this).attr('id');
        var fecha = document.getElementById('fecha').value;

        if ($(this).is(":checked")) {
         
         $.ajax({
                     url: '/plainmaculada/asistencia/Eliminar',
                     type: 'POST',
                     data: {id: id, fecha: fecha},
                })
                .done(function(respuesta) {
                       if (respuesta==0) {
                            jQuery().toastmessage('showToast', {
                            text     : 'Ah ocurrido un error en la accion. Vuelva a intentarlo.', //text to display
                            sticky   : true, // disable auto hide
                            type     : 'error' //type: success, error, warning or notification
                         });
                        }else{
                             //vaciar los campos
                            jQuery().toastmessage('showToast', {
                            text     : 'Se ha marcado que el docente asistió a la Institucion en la fecha establecida.', //text to display
                            sticky   : true, // disable auto hide
                            type     : 'success' //type: success, error, warning or notification
                         });
                        }
                })
              
                .fail(function() {
                            console.log("error");
                            })
                .always(function() {
                                          
                });
        
        }
});

    
 });