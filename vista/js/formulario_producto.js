jQuery(document).ready(function() {
  alert("kjkjb");
  $("#btn").click(function() {
    var _id_categoria=$("#txtid_categoria").val();
    var _id_subcategoria= $("#txtid_subcategoria").val();
    var _id_proveedor=$("#txtid_proveedor").val();
    var _descripcion=$("#txtdescripcion").val();
    var _v_costo= $("#txtv_costo").val();
    var _venta_1= $("#txtventa_1").val();
    var _venta_2= $("#txtventa_2").val();
    var _venta_3= $("#txtventa_3").val();
    var _venta_4= $("#txtventa_4").val();
    var _p_utilidad= $("#txtp_utilidad").val();
    var _stock_min= $("#txtstock_min").val();
    var _stock_max= $("#txtstock_max").val();
    var _medida= $("#txtmedida").val();
    var _p_descuento= $("#txtp_descuento").val();
    var _observacion= $("#txtobservacion").val();
    var d = new Date(); 
    $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
    var _fcreado=$fecha;
    var _fmodificado=$fecha;

    var parametros={ id_categoria : _id_categoria , id_subcategoria: _id_subcategoria , id_proveedor : _id_proveedor , descripcion :_descripcion , v_costo : _v_costo , venta_1: _venta_1 ,venta_2 :_venta_2 , venta_3:_venta_3 , venta_4:_venta_4 ,p_utilidad:_p_utilidad , stock_min:_stock_min, stock_max : _stock_max, medida : _medida, p_descuento : _p_descuento, observacion : _observacion,fcreado:_fcreado,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php';
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
