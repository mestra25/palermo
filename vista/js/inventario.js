function mostrar(){

var select = $("#usuario").val();
var id_usuario = $("#id_usuario").val();
alert(id_usuario);


   if (select=="usuario") {
document.getElementById('formulario_cliente').style.display = 'none';
document.getElementById('formulario_usuario').style.display = 'inline';
   };

   if (select=="cliente") {
document.getElementById('formulario_usuario').style.display = 'none';
document.getElementById('formulario_cliente').style.display = 'inline';
   };
}
