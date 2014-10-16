jQuery(document).ready(function() {

    $("#btn").click(function() {
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txobservacion").val();
     var _fcreado=$("#txtfcreado").val();
     var _fmodificado=$("#txtfmodificado").val();
    
     var parametros={ descripcion :_descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado };
     var archivo='../controladores/subcategoria.php';
   

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
