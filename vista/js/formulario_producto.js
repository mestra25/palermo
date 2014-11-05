jQuery(document).ready(function() {

  $("#btn").click(function() {
    var _id_categoria=$("#txtid_categoria").val();
    var _id_subcategoria= $("#txtid_subcategoria").val();
    var _id_proveedor=$("#txtid_proveedor").val();
    var _codigo=$("#codigo_producto").val();
    var _descripcion=$("#txtdescripcion").val();
    var _v_costo= $("#txtvcosto").val();
    var _venta_1= $("#txtventa1").val();
    var _venta_2= $("#txtventa2").val();
    var _venta_3= $("#txtventa3").val();
    var _venta_4= $("#txtventa4").val();
    var _p_utilidad= $("#txtp_utilidad").val();
    var _stock_min= $("#txtstock_min").val();
    var _stock_max= $("#txtstock_max").val();
    var _existencia= $("#txtexistencia").val();
    var _medida= $("#txtid_medida").val();
    var _p_descuento= $("#txtp_descuento").val();
    var _observacion= $("#txtobservacion").val();
    var d = new Date(); 
    $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
    var _fcreado=$fecha;
    var _fmodificado=$fecha;
    var parametros={ id_categoria : _id_categoria , id_subcategoria: _id_subcategoria , id_proveedor : _id_proveedor , codigo:_codigo, descripcion :_descripcion , v_costo : _v_costo , venta_1: _venta_1 ,venta_2 :_venta_2 , venta_3:_venta_3 , venta_4:_venta_4 ,p_utilidad:_p_utilidad , stock_min:_stock_min, stock_max : _stock_max, existencia:_existencia, medida : _medida, p_descuento : _p_descuento, observacion : _observacion,fcreado:_fcreado,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php?action=Guardar';
    $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });

  }); 

  $(".btneditar").click(function() {
    var _id_producto=$("#txtid_producto").val();
    var _id_categoria=$("#txtid_categoria").val();
    var _id_subcategoria= $("#txtid_subcategoria").val();
    var _id_proveedor=$("#txtid_proveedor").val();
    var _medida= $("#txtid_medida").val();
    var _codigo=$("#codigo_producto").val();
    var _descripcion=$("#txtdescripcion").val();
    var _v_costo= $("#txtvcosto").val();
    var _venta_1= $("#txtventa1").val();
    var _venta_2= $("#txtventa2").val();
    var _venta_3= $("#txtventa3").val();
    var _venta_4= $("#txtventa4").val();
    var _p_utilidad= $("#txtp_utilidad").val();
    var _stock_min= $("#txtstock_min").val();
    var _stock_max= $("#txtstock_max").val();
    var _p_descuento= $("#txtp_descuento").val();
    var _observacion= $("#txtobservacion").val();
    var d = new Date(); 
    $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
    var _fmodificado=$fecha;
    var parametros={ id_producto : _id_producto,  id_categoria : _id_categoria , id_subcategoria: _id_subcategoria , id_proveedor : _id_proveedor , codigo : _codigo, descripcion :_descripcion , v_costo : _v_costo , venta_1: _venta_1 ,venta_2 :_venta_2 , venta_3:_venta_3 , venta_4:_venta_4 ,p_utilidad:_p_utilidad , stock_min:_stock_min, stock_max : _stock_max,  medida : _medida, p_descuento : _p_descuento, observacion : _observacion,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php?action=Editar';

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
