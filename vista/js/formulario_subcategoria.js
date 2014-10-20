jQuery(document).ready(function() {

    $("#btn").click(function() {
     
     var _descripcion=$("#txtdescripcion").val();
     var _observacion= $("#txtobservacion").val();
     var d = new Date(); 
     $fecha =(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear()+" , "+d.getHours()+":"+d.getMinutes());
     var _fcreado = $fecha;
     var _fmodificado= $fecha;
    
     var parametros={ descripcion :_descripcion , observacion: _observacion , fcreado : _fcreado , fmodificado :_fmodificado };
     var archivo='../controladores/subcategoria.php';
      alert("dd");

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
    document.getElementById('dialogboxhead').innerHTML = "Subcategoria";
      document.getElementById('dialogboxbody').innerHTML = dialog;
  }
  this.ok = function(){
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}
var Alert = new CustomAlert();

Alert.render("Datos Guardados Satisfactoriamente");
var pagina="../vista/subcategoria.php";
location.href=pagina;

    });
    

});
