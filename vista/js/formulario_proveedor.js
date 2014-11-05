jQuery(document).ready(function() 

{



  $("#guardarProvee").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
            txtemail: {  email:true,required:true},
            
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
            txtemail: "Debe indicar un formato correcto",
          
          },
        submitHandler: function(form){
         var _nueva=$("#txtnueva").val();
     var _nit=$("#txtnit").val();
     var _nombre_empresa=$("#txtnombre_empresa").val();
     var _direccion= $("#txtdireccion").val();
     var _telefono=$("#txttelefono").val();
     var _email=$("#txtemail").val();
     var _web= $("#txtweb").val();
     var _contac= $("#txtcontac").val();
     var _numcontac= $("#txtnumcontac").val();
     var _replegal=$("#txtreplegal").val();
     var _cedrep= $("#txtcedrep").val();
     var _celrep= $("#txtcelrep").val();
     var parametros={nueva:_nueva, nit : _nit, nombre_empresa : _nombre_empresa, direccion : _direccion , telefono : _telefono , email :_email , web : _web , contac : _contac, numcontac : _numcontac ,replegal :_replegal , cedrep:_cedrep , celrep:_celrep};
     var archivo='../controladores/proveedor.php?action=Guardar';
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });
          
      } });

$("#editarProvee").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
            txtemail: {  email:true,required:true},
            
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
            txtemail: "Debe indicar un formato correcto",
          
          },
        submitHandler: function(form){
        var _nit=$("#txtnit").val();
     var _nombre_empresa=$("#txtnombre_empresa").val();
     var _direccion= $("#txtdireccion").val();
     var _telefono=$("#txttelefono").val();
     var _email=$("#txtemail").val();
     var _web= $("#txtweb").val();
     var _contac= $("#txtcontac").val();
     var _numcontac= $("#txtnumcontac").val();
     var _replegal=$("#txtreplegal").val();
     var _cedrep= $("#txtcedrep").val();
     var _celrep= $("#txtcelrep").val();

     var parametros={ nit : _nit, nombre_empresa : _nombre_empresa, direccion : _direccion , telefono : _telefono , email :_email , web : _web , contac : _contac,numcontac:_numcontac ,replegal :_replegal , cedrep:_cedrep , celrep:_celrep};
     var archivo='../controladores/proveedor.php?action=Editar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#rpt").html(datos);
      }
    });
          
      } });

    

  
    
});
