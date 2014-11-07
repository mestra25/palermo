jQuery(document).ready(function() {

  $("#guardarProd").validate({
        rules: {
        txtid_categoria: { required: true},
        txtid_subcategoria: { required: true},
        txtid_proveedor: { required: true,minlength: 4},
        txtid_ubicacion: { required: true},
        txtcodigo_producto: { required: true,minlength: 4},
        txtdescripcion: { required: true,minlength: 4},
        txtvcosto: { required: true},
        txtventa1: { required: true},
        txtventa2: { required: true},
        txtventa3: { required: true},
       txtventa4: { required: true,minlength: 1},
       txtp_utilidad: { required: true,minlength: 1},
       txtstock_min: { required: true,minlength: 1},
       txtstock_max: { required: true,minlength: 1},
       txtexistencia: { required: true,minlength: 1},
       txtid_medida: { required: true,minlength: 10},
       txtp_descuento: { required: true,minlength: 1}, 
       txtobservacion: { required: true,minlength:4},
        },
        messages: {
       
          txtid_categoria: "Debe escribir una descripcion",
          txtid_subcategoria: "indique la subcategoria",
          txtid_proveedor: "indique el proveedor",
          txtid_ubicacion: "indique la ubicacion",
        txtcodigo_producto: "indique codigo del producto",
        txtdescripcion: "indique la descripcion",
        txtvcosto: "indique el valor costo",
        txtventa1: "indique la venta uno",
        txtventa2: "indique la venta dos",
        txtventa3: "indique la venta tres",
       txtventa4: "indique la venta cuatro",
       txtp_utilidad: "indique la utilidad",
       txtstock_min: "indique stock minimo",
       txtstock_max: "indique stock maximo",
       txtexistencia: "indique la existencia",
       txtid_medida: "indique la medida",
       txtp_descuento: "indique el descuento", 
       txtobservacion: "indique la obeservacion"
          
          },
        submitHandler: function(form){
          
    var _id_categoria=$("#txtid_categoria").val();
    var _id_subcategoria= $("#txtid_subcategoria").val();
    var _id_proveedor=$("#txtid_proveedor").val();
    var _id_ubicacion=$("#txtid_ubicacion").val();
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
    var parametros={ id_categoria : _id_categoria , id_subcategoria: _id_subcategoria , id_proveedor : _id_proveedor,id_ubicacion:_id_ubicacion , codigo:_codigo, descripcion :_descripcion , v_costo : _v_costo , venta_1: _venta_1 ,venta_2 :_venta_2 , venta_3:_venta_3 , venta_4:_venta_4 ,p_utilidad:_p_utilidad , stock_min:_stock_min, stock_max : _stock_max, existencia:_existencia, medida : _medida, p_descuento : _p_descuento, observacion : _observacion,fcreado:_fcreado,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php?action=Guardar';
    alert(_id_ubicacion);
    $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });
} });
 $("#editarProd").validate({
        rules: {
        txtid_categoria: { required: true},
        txtid_subcategoria: { required: true},
        txtid_proveedor: { required: true,minlength: 4},
        txtid_ubicacion: { required: true,minlength: 4},
        txtcodigo_producto: { required: true,minlength: 4},
        txtdescripcion: { required: true,minlength: 4},
        txtvcosto: { required: true},
        txtventa1: { required: true},
        txtventa2: { required: true},
        txtventa3: { required: true},
       txtventa4: { required: true,minlength: 1},
       txtp_utilidad: { required: true,minlength: 1},
       txtstock_min: { required: true,minlength: 1},
       txtstock_max: { required: true,minlength: 1},
       txtexistencia: { required: true,minlength: 1},
       txtid_medida: { required: true,minlength: 10},
       txtp_descuento: { required: true,minlength: 3}, 
       txtobservacion: { required: true,minlength: 4},
        },
        messages: {
       
          txtid_categoria: "Debe escribir una descripcion",
          txtid_subcategoria: "indique la subcategoria",
          txtid_proveedor: "indique el proveedor",
          txtid_ubicacion: "indique el ubicacion",
        txtcodigo_producto: "indique codigo del producto",
        txtdescripcion: "indique la descripcion",
        txtvcosto: "indique el valor costo",
        txtventa1: "indique la venta uno",
        txtventa2: "indique la venta dos",
        txtventa3: "indique la venta tres",
       txtventa4: "indique la venta cuatro",
       txtp_utilidad: "indique la utilidad",
       txtstock_min: "indique stock minimo",
       txtstock_max: "indique stock maximo",
       txtexistencia: "indique la existencia",
       txtid_medida: "indique la medida",
       txtp_descuento: "indique el descuento", 
       txtobservacion: "indique la obeservacion"
          
          },
        submitHandler: function(form){

    var _id_producto=$("#txtid_producto").val();
    var _id_categoria=$("#txtid_categoria").val();
    var _id_subcategoria= $("#txtid_subcategoria").val();
    var _id_proveedor=$("#txtid_proveedor").val();
    var _id_ubicacion=$("#txtid_ubicacion").val();
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
    var _fmodificado=$fecha;
    var parametros={ id_producto:_id_producto, id_categoria : _id_categoria , id_subcategoria: _id_subcategoria , id_proveedor : _id_proveedor,id_ubicacion:_id_ubicacion , codigo:_codigo, descripcion :_descripcion , v_costo : _v_costo , venta_1: _venta_1 ,venta_2 :_venta_2 , venta_3:_venta_3 , venta_4:_venta_4 ,p_utilidad:_p_utilidad , stock_min:_stock_min, stock_max : _stock_max, existencia:_existencia, medida : _medida, p_descuento : _p_descuento, observacion : _observacion,fmodificado:_fmodificado };
    var archivo='../controladores/producto.php?action=Editar';
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
