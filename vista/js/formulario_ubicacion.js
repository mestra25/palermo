jQuery(document).ready(function() {

    $("#btn").click(function() {

     var _descripcion=$("#txtdescripcion").val();
     var _nueva=$("#txtnueva").val();
     var parametros={nueva:_nueva, descripcion : _descripcion };
     var archivo='../controladores/ubicacion.php?action=Guardar';
   
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
