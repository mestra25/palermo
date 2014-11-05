jQuery(document).ready(function() {
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
      $('#txtid_categoria').prop('selectedIndex',0);
      $("#respuesta").html(datos);
      $("#txtdescripcion_cat").val("");
      $("#txtobservacion_cat").val("");      
      $('#dialog-confirm_1').dialog( "close" );
      alert("Categoria Agregada Correctamente");
}
    });
});


    $("#btn_sub").click(function() {
     
     var _nueva=$("#txtnueva").val();
     var _id_categoria=$("#txtid_categoria_sub").val();
     var _descripcion=$("#txtdescripcion_sub").val();
     var _observacion= $("#txtobservacion_sub").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado = $fecha;
     var _fmodificado= $fecha;
    
     var parametros={nueva:_nueva, id_categoria:_id_categoria, descripcion :_descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado };
     var archivo='../controladores/subcategoria.php?action=Guardar';

     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){

        var nuevo = $.parseJSON(datos); 

      $('#txtid_subcategoria').append(new Option(nuevo['descripcion'], nuevo['id_subcategoria'], true, true));
      $('#txtid_subcategoria').prop('selectedIndex',0);
        $("#respuesta").html(datos);
        $("#txtdescripcion_sub").val("");
        $("#txtobservacion_sub").val("");
        $('#dialog-confirm_2').dialog( "close" );
        alert("Subcategoria Agregada Correctamente");
      }
    });

    });
        $("#btn_med").click(function() {

     var _nueva=$("#txtnueva").val();
     var _descripcion=$("#txtdescripcion_med").val();
     var parametros={ nueva:_nueva,descripcion : _descripcion };
     var archivo='../controladores/medida.php?action=Guardar';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function(datos){

      var nuevo = $.parseJSON(datos); 

      $('#txtid_medida').append(new Option(nuevo['descripcion'], nuevo['id_medida'], true, true));
      $('#txtid_medida').prop('selectedIndex',0);
        $("#respuesta").html(datos);
        $("#txtdescripcion_med").val("");
        $('#dialog-confirm_3').dialog( "close" );
        alert("Medida Agregada Correctamente");
      }
    });


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
      var nuevo = $.parseJSON(datos);
      
      $("#respuesta").html(datos);
}
    });
        
    });

    
});
