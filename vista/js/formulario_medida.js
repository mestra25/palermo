jQuery(document).ready(function() {

    $("#btn").click(function() {

     var _descripcion=$("#txtdescripcion").val();
     var _nueva=$("#txtnueva").val();
     var parametros={nueva:_nueva, descripcion : _descripcion };
     var archivo='../controladores/medida.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });


});


        $("#btn_med").click(function() {

     var _nueva=$("#txtnueva").val();
     var _descripcion=$("#txtdescripcion_med").val();
     var parametros={ nueva:_nueva,descripcion : _descripcion };
     var archivo='../controladores/medida.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });


});


    $("#editar").click(function() {
    alert("editar");
});

});
