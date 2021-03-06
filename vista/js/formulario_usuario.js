jQuery(document).ready(function() {

   $("#formEditar").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
            txtemail: {  email:true,required:true},
            txtpassword :{ required: true ,minlength: 4, maxlength: 10},
            txtconfpassword:{ equalTo:"#txtpassword"}
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
            txtemail: "Debe indicar un formato correcto",
            txtpassword :{required:"Campo obligatorio"},
            txtconfpassword:{equalTo:"La contraseña no es igual"}
          },
        submitHandler: function(form){
          

     var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var _rol= $("#txtrol").val();
     var _password= $("#txtpassword").val();
     var _confpassword= $("#txtconfpassword").val();

  

     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email , rol : _rol, password : _password  };
     var archivo='../controladores/usuario.php?action=Editar';

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#rpt").html(datos);
      }
    });;
        } 
      });

    $("#formUsur").validate({
        rules: {
            txtcedula: { required: true, minlength: 6},
            txtnombre: { required: true,maxlength: 15},
            txtapellido: { required:true, maxlength: 15},
            txtcelular: {required:true,   maxlength: 15 },
            txtdireccion: { required: true, maxlength: 30},
            txtemail: {  email:true,required:true},
            txtpassword :{ required: true ,minlength: 4, maxlength: 15},
            txtconfpassword:{ equalTo:"#txtpassword"}
            
        },
        messages: {
            txtcedula: "Debe indicar su cedula",
            txtnombre: "Debe  indicar su Nombre",
            txtapellido:"Debe  indicar su Apellido",
            txtcelular: "Debe indicar su telefono , solo numeros",
            txtdireccion: "Indique una direccion",
            txtemail: "Debe indicar un formato correcto",
            txtpassword :{required:"Campo obligatorio"},
            txtconfpassword:{equalTo:"La contraseña no es igual"}
          },
        submitHandler: function(form){
          

     var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var _rol= $("#txtrol").val();
     var _password= $("#txtpassword").val();
     var _confpassword= $("#txtconfpassword").val();

  

     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email , rol : _rol, password : _password  };
     var archivo='../controladores/usuario.php?action=Guardar';
   

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });;
        } 
      });

   
});
