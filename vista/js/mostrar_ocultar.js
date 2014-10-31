
function mostrar(){
document.getElementById('formulario').style.display = 'block';
document.getElementById('page-wrap').style.display = 'none';
document.getElementById('cancelar').style.display = 'none';
document.getElementById('buscar').style.display = 'none';
document.getElementById('buscar_').style.display = 'none';

}


function ocultar(){
document.getElementById('formulario').style.display = 'none';
document.getElementById('page-wrap').style.display = 'block';
document.getElementById('buscar').style.display = 'inline';
$(".campos_edi").val("");

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

function aprovadas(){
document.getElementById('tabla_aprovada').style.display = 'inline';
document.getElementById('tabla_espera').style.display = 'none';
document.getElementById('tabla_rechazada').style.display = 'none';
document.getElementById('aprovadas').style.display = 'none';
document.getElementById('en_espera').style.display = 'inline';
document.getElementById('rechazada').style.display = 'inline';
}

function espera(){
document.getElementById('tabla_aprovada').style.display = 'none';
document.getElementById('tabla_espera').style.display = 'inline';
document.getElementById('tabla_rechazada').style.display = 'none';
document.getElementById('aprovadas').style.display = 'inline';
document.getElementById('en_espera').style.display = 'none';
document.getElementById('rechazada').style.display = 'inline';

}

function rechazadas(){
document.getElementById('tabla_aprovada').style.display = 'none';
document.getElementById('tabla_espera').style.display = 'none';
document.getElementById('tabla_rechazada').style.display = 'inline';
document.getElementById('aprovadas').style.display = 'inline';
document.getElementById('en_espera').style.display = 'inline';
document.getElementById('rechazada').style.display = 'none';
}