    // Con estas 3 líneas sobreescribimos el Constains para que no sea case sensitive pues por default en jquery  viene con case sensitive. Si no lo pones, queda como Case sensitive
    $.expr[':'].Contains = function(x, y, z){
        return jQuery(x).text().toLowerCase().indexOf(z[3].toLowerCase())>=0;
    };

    // cada que escribamos, vamos a revisar lo que hay escrito 
    $('#buscar_').keyup(function() 
    {
        //tomamos el valor que tiene el input
        var search = $('#buscar_').val();
        //mostramos todos los valores, para despues ir ocultando los que no coinciden
        $('#tabla tr').show();
        
        //esto es para revisar si tenemos algo que buscar, sino, que no lo haga.
        if(search.length>0)
        {
        // con la clase .nombre le decimos en cual de las celdas buscar y si no coincide, ocultamos el tr que contiene a esa celda. 
        $("#tabla tr td.codigo").not(":Contains('"+search+"')").parent().hide();
        
        }else{
            
        }

});