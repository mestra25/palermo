jQuery(document).ready(function() {
  $("#guardarCat").validate({
        rules: {
          txtnueva: { required: true, minlength: 6},
            txtdescripcion: { required: true, minlength: 6},
            txtobservacion: { required: true,minlength: 10},
            
            
            
        },
        messages: {
       
            txtdescripcion: "Debe escribir una descripcion",
            txtobservacion: "Debe  indicar una observacion"
            
          
          },
        submitHandler: function(form){
          
    var _nueva=$("#txtnueva").val();
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado=$fecha;
     var _fmodificado=$fecha;
    
     var parametros={ nueva:_nueva, descripcion : _descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado  };
     var archivo='../controladores/categoria.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
} });
$("#editarCat").validate({
        rules: {
         
            txtdescripcion: { required: true, minlength: 6},
            txtobservacion: { required: true,minlength: 10},
            
            
            
        },
        messages: {
       
            txtdescripcion: "Debe escribir una descripcion",
            txtobservacion: "Debe  indicar una observacion"
            
          
          },
        submitHandler: function(form){
          
     var _id_categoria=$("#txtidcategoria").val();
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fmodificado=$fecha;
     var parametros={ id_categoria: _id_categoria, descripcion : _descripcion , observacion: _observacion , fmodificado :_fmodificado  };

     var archivo='../controladores/categoria.php?action=Editar';
    
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#rpt").html(datos);
      }
    });
} });


    





    $("#btn").click(function() {
     
     var _nueva=$("#txtnueva").val();
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado=$fecha;
     var _fmodificado=$fecha;
    
     var parametros={ nueva:_nueva, descripcion : _descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado  };
     var archivo='../controladores/categoria.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });

});

    $("#btn_cat").click(function() {

     var _nueva=$("#txtnueva").val();
     var _descripcion=$("#txtdescripcion_cat").val();
     var _observacion= $("#txtobservacion_cat").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado=$fecha;
     var _fmodificado=$fecha;
    
     var parametros={ nueva:_nueva, descripcion : _descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado  };
     var archivo='../controladores/categoria.php?action=Guardar';
 
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){

      var nuevo = $.parseJSON(datos); 

      $('#txtid_categoria').append(new Option(nuevo['descripcion'], nuevo['id_categoria'], true, true));
      $("#respuesta").html(datos);

    });
});


    $(".btneditar").click(function() {

    
     var _id_categoria=$("#txtidcategoria").val();
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fmodificado=$fecha;
     var parametros={ id_categoria: _id_categoria, descripcion : _descripcion , observacion: _observacion , fmodificado :_fmodificado  };

     var archivo='../controladores/categoria.php?action=Editar';
    
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#rpt").html(datos);
      }
    });

});
});
