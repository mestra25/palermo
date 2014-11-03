jQuery(document).ready(function() 

{
 
    $("#btn").click(function() {

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
     var parametros={ nueva:_nueva,nit : _nit, nombre_empresa : _nombre_empresa, direccion : _direccion , telefono : _telefono , email :_email , web : _web , contac : _contac, numcontac : _numcontac ,replegal :_replegal , cedrep:_cedrep , celrep:_celrep};
     var archivo='../controladores/proveedor.php?action=Guardar';
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){
        $("#respuesta").html(datos);
      }
    });
     ocultar();
    });


     $("#btn_pro").click(function() {

      var _nueva=$("#txtnueva").val();
     var _nit=$("#txtnit_pro").val();
     var _nombre_empresa=$("#txtnombre_empresa_pro").val();
     var _direccion= $("#txtdireccion_pro").val();
     var _telefono=$("#txttelefono_pro").val();
     var _email=$("#txtemail_pro").val();
     var _web= $("#txtweb_pro").val();
     var _contac= $("#txtcontac_pro").val();
     var _numcontac= $("#txtnumcontac_pro").val();
     var _replegal=$("#txtreplegal_pro").val();
     var _cedrep= $("#txtcedrep_pro").val();
     var _celrep= $("#txtcelrep_pro").val();
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

    });



    $(".btneditar").click(function  () {
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

    
    });
    

  
    
});
