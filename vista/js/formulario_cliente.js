jQuery(document).ready(function() {
        $("#editarCli").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
            
            
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
          
          },
        submitHandler: function(form){
          
      var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email};
     var archivo='../controladores/cliente.php?action=Editar';
   
      
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
      
    });
   
        } 
      });

$("#guardarCli").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
        
            
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
            
          
          },
        submitHandler: function(form){
          
      var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email};
     var archivo='../controladores/cliente.php?action=Guardar';
   
      
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }  
    });} });
    





});
