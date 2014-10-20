jQuery(document).ready(function() {
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
     var archivo='../controladores/proveedor.php';
   
     $.ajax({
      type :"POST",
      url : archivo,
      data :parametros,
      success : function( datos){
        $("#respuesta").html(datos);
      }
    });


function CustomAlert(){
  this.render = function(dialog){
    var winW = window.innerWidth;
      var winH = window.innerHeight;
    var dialogoverlay = document.getElementById('dialogoverlay');
      var dialogbox = document.getElementById('dialogbox');
    dialogoverlay.style.display = "block";
      dialogoverlay.style.height = winH+"px";
    dialogbox.style.left = (winW/2) - (550 * .5)+"px";
      dialogbox.style.top = "100px";
      dialogbox.style.display = "block";
    document.getElementById('dialogboxhead').innerHTML = "Proveedor";
      document.getElementById('dialogboxbody').innerHTML = dialog;
  }
  this.ok = function(){
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}
var Alert = new CustomAlert();

Alert.render("Datos Guardados Satisfactoriamente");
var pagina="../vista/provedor.php";
location.href=pagina;

    });
    
});
