jQuery(document).ready(function() {

    $("#btn").click(function() {
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var _fcreado = $fecha;
     var _fmodificado= $fecha;
    
     var parametros={ descripcion :_descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado };
     var archivo='../controladores/subcategoria.php';
      alert("dd");

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
