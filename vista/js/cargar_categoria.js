$(document).ready(function(){
		$("#btn_cat").bind("click",function(){
			var miselect=$("#txtid_categoria");
			/* VACIAMOS EL SELECT Y PONEMOS UNA OPCION QUE DIGA CARGANDO... */
			miselect.find('option').remove().end().append('').val('');
			
			$.post("../php/lista_categoria.php",
				function(data) {
					miselect.empty();
					for (var i=0; i' + data[i].literal + ''');
					}
			}, "json");
		});
		

	});