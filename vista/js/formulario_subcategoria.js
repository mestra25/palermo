jQuery(document).ready(function() {
    $("#btn").click(function() {
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txobservacion").val();
     var f = new Date();
     var d = var d = new Date(); document.write(d.getDate() + "/" + (d.getMonth() +1) + "/" + d.getFullYear(), ', '+d.getHours(),':'+d.getMinutes(),':'+d.getSeconds());
     var _fcreado = $d;
     alert("knkln");
     var _fmodificado=new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
    
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
