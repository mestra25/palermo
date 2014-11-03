jQuery(document).ready(function() {

    $("#btn").click(function() {

     var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var _rol= $("#txtrol").val();
     var _password= $("#txtpassword").val();
     var _confpassword= $("#txtconfpassword").val();

     if ( _password == _confpassword)
     {

     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email , rol : _rol, password : _password  };
     var archivo='../controladores/usuario.php?action=Guardar';
   

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
    }else{
      alert(" Verifique si las contraseñas son iguales");
     
    }
    });

    $(".btneditar").click(function() {
          
     var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var _password= $("#txtpassword").val();

     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email , password : _password   };
     var archivo='../controladores/usuario.php?action=Editar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#rpt").html(datos);
      }
    });
   
 
  
    
    });

});
