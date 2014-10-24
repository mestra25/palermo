jQuery(document).ready(function() 

{


   
  
    $("#btn").click(function() {
     var _nit=$("#txtnit").val();
     var _direccion= $("#txtdireccion").val();
     var _telefono=$("#txttelefono").val();
     var _email=$("#txtemail").val();
     var _web= $("#txtweb").val();
     var _contac= $("#txtcontac").val();
     var _replegal=$("#txtreplegal").val();
     var _cedrep= $("#txtcedrep").val();
     var _celrep= $("#txtcelrep").val();

     var parametros={ nit : _nit , direccion : _direccion , telefono : _telefono , email :_email , web : _web , contac : _contac ,replegal :_replegal , cedrep:_cedrep , celrep:_celrep};
     var archivo='../controladores/proveedor.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
     
     ocultar();
    });

    $(".btneditar").click(function  () {
      
      var _nit=$("#txtnit").val();
     var _direccion= $("#txtdireccion").val();
     var _telefono=$("#txttelefono").val();
     var _email=$("#txtemail").val();
     var _web= $("#txtweb").val();
     var _contac= $("#txtcontac").val();
     var _replegal=$("#txtreplegal").val();
     var _cedrep= $("#txtcedrep").val();
     var _celrep= $("#txtcelrep").val();

     var parametros={ nit : _nit , direccion : _direccion , telefono : _telefono , email :_email , web : _web , contac : _contac ,replegal :_replegal , cedrep:_cedrep , celrep:_celrep};
     var archivo='../controladores/proveedor.php?action=Editar';
   
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
