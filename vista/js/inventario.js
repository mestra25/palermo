function mostrar(){

	var select = $("#movimiento").val();
	var id_usuario = $("#id_usuario").val();


	if (select=="entrada") {
		document.getElementById('reset').style.display = 'inline';
		document.getElementById("movimiento").disabled = true;
		document.getElementById('formulario_cliente').style.display = 'none';
		document.getElementById('formulario_usuario').style.display = 'inline';
	};

	if (select=="salida") {
		document.getElementById("movimiento").disabled = true;
		document.getElementById('reset').style.display = 'inline';
		document.getElementById('formulario_usuario').style.display = 'none';
		document.getElementById('formulario_cliente').style.display = 'inline';
	};
}
function mostrar_buscar(){
	document.getElementById('buscar_').style.display = 'inline';
	document.getElementById('buscar').style.display = 'none';
	document.getElementById('cancelar').style.display = 'inline';
}
function mostrar_boton_buscar(){
	document.getElementById('buscar').style.display = 'inline';
	document.getElementById('cancelar').style.display = 'none';
	document.getElementById('buscar_').value = "";
	document.getElementById('buscar_').style.display = 'none';
	$("#tabla tr td").parent().show();
}

function reservar(){
	document.getElementById('formulario_reserva').style.display = 'inline';
}

function reset(){
	document.getElementById('reset').style.display = 'none';
	document.getElementById("movimiento").disabled = false;
	document.getElementById('formulario_cliente').style.display = 'none';
	document.getElementById('formulario_usuario').style.display = 'none';
	$('#movimiento').val( $('#movimiento').prop('defaultSelected') );
}