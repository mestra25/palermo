jQuery(document).ready(function() {

    $("#btn").click(function() {

     var _cedula=$("#txtcedula").val();
     var _nombre= $("#txtnombre").val();
     var _apellido=$("#txtapellido").val();
     var _celular=$("#txtcelular").val();
     var _direccion= $("#txtdireccion").val();
     var _email= $("#txtemail").val();
     var _rol= $("#txtrol").val();
    

     var parametros={ cedula :_cedula , nombre: _nombre , apellido : _apellido , celular :_celular , direccion : _direccion , email : _email , rol : _rol };
     var archivo='../controladores/usuario.php';
   

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });

    });
               alert("hola");

});
