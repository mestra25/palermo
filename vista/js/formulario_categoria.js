jQuery(document).ready(function() {

    $("#btn").click(function() {

     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado=$fecha;
     var _fmodificado=$fecha;
    
     var parametros={ descripcion : _descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado  };
     var archivo='../controladores/categoria.php';
   

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });

});
    $("#editar").click(function() {
    alert("editar");
});

});
