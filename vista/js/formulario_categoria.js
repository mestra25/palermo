jQuery(document).ready(function() {

alert("HOLA");
    $("#btn").click(function() {
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var _fcreado=$("#txtfcreado").val();
     var _fmodificado=$("#txtfmodificado").val();
     

     var parametros={ descripcion :_descripcion , obsevacion: _observacion , fcreado : _fcreado , modificado :_fmodificado };
     var archivo='../controladores/categoria.php';
     alert("HOLA1");

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
    });
    
});
