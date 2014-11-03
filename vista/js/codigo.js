jQuery(document).ready(function() {
	 

		function categoria(){
			alert("codigo");
		}

 $("#txtid_categoria").change(function(event){

 	var valor = $(this).val();
 	//alert(valor);
 	if (valor=="nueva_categoria") {

 		$( "#dialog-confirm_1" ).dialog({
	      resizable: false,
	      height:530,
    	  width:450,
	      modal: true,
	      buttons: {

	        Cancelar: function() {
	          $( this ).dialog( "close" );

	        }
	      }
	    });
  	};

 if (valor!="nueva_categoria") {
	document.getElementById('codigo_producto').value = $("#txtid_categoria").val()+""+$("#txtid_subcategoria").val()+""+$("#txtincrementable").val();
 };
        });

 $("#txtid_medida").change(function(event){

 	var valor = $(this).val();
 	//alert(valor);
 	if (valor=="nueva_medida") {

 		$( "#dialog-confirm_3" ).dialog({
	      resizable: false,
	      height:430,
    	  width:450,
	      modal: true,
	      buttons: {

	        Cancelar: function() {
	          $( this ).dialog( "close" );

	        }
	      }
	    });
  	};
        });


$("#txtid_proveedor").change(function(event){

 	var valor = $(this).val();
 	//alert(valor);
 	if (valor=="nueva_proveedor") {

 		$( "#dialog-confirm_4" ).dialog({
	      resizable: false,
	      height:800,
    	  width:450,
	      modal: true,
	      buttons: {

	        Cancelar: function() {
	          $( this ).dialog( "close" );

	        }
	      }
	    });
  	};
        });

  $("#txtid_subcategoria").change(function(event){
 
	var valor = $(this).val();
 	alert(valor);
 	if (valor=="nueva_subcategoria") {

 		$( "#dialog-confirm_2" ).dialog({
	      resizable: false,
	      height:570,
    	  width:480,
	      modal: true,
	      buttons: {

	        Cancelar: function() {
	          $( this ).dialog( "close" );

	        }
	      }
	    });
  	};

 if (valor!="nueva_subcategoria") {
	document.getElementById('codigo_producto').value = $("#txtid_categoria").val()+""+$("#txtid_subcategoria").val()+""+$("#txtincrementable").val();
 };
  });
    });