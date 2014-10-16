
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

