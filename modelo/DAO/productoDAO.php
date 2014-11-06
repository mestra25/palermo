<?php
require_once '/../CLASES/producto.php';
require_once '/../conexion.php';

class productoDao {


    const tabla = "producto";

    function guardar($Objproducto){
            $conexion = new conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (id_producto,  id_categoria, id_subcategoria, id_proveedor, codigo, descripcion, v_costo, venta_1, venta_2, venta_3, venta_4, p_utilidad, medida, p_descuento, stock_min, stock_max, fcreado, fmodificado, existencia, reserva, observacion) VALUES(:id_producto, :id_categoria, :id_subcategoria, :id_proveedor, :codigo, :descripcion, :v_costo, :venta_1, :venta_2, :venta_3, :venta_4, :p_utilidad, :medida, :p_descuento, :stock_min, :stock_max, :fcreado, :fmodificado, :existencia, :reserva, :observacion )');
            $consulta->bindParam(':id_producto', $Objproducto->getIdProducto());
            $consulta->bindParam(':id_categoria', $Objproducto->getIdcategoria());
            $consulta->bindParam(':id_subcategoria', $Objproducto->getIdsubcategoria());
            $consulta->bindParam(':id_proveedor', $Objproducto->getIdproveedor());
            $consulta->bindParam(':codigo', $Objproducto->getcodigo());
            $consulta->bindParam(':descripcion', $Objproducto->getdescripcion());
            $consulta->bindParam(':v_costo', $Objproducto->getVcosto());
            $consulta->bindParam(':venta_1', $Objproducto->getVenta1());
            $consulta->bindParam(':venta_2', $Objproducto->getVenta2());
            $consulta->bindParam(':venta_3', $Objproducto->getVenta3());
            $consulta->bindParam(':venta_4', $Objproducto->getVenta4());
            $consulta->bindParam(':p_utilidad', $Objproducto->getPrecutil());
            $consulta->bindParam(':medida', $Objproducto->getMedidad());
            $consulta->bindParam(':p_descuento', $Objproducto->getPorcdescuento());
            $consulta->bindParam(':stock_min', $Objproducto->getStockmin());
            $consulta->bindParam(':stock_max', $Objproducto->getStockmax());
            $consulta->bindParam(':fcreado', $Objproducto->getCreadofec());
            $consulta->bindParam(':fmodificado', $Objproducto->getModificado());
            $consulta->bindParam(':existencia', $Objproducto->getexistencia());
            $consulta->bindParam(':reserva', $Objproducto->getreserva());
            $consulta->bindParam(':observacion', $Objproducto->getObservaciones());

            $consulta->execute();
            if ($consulta) {
     echo "<script language='javascript'>"; 
     echo "function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'Producto';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Guardados Satisfactoriamente');
    var pagina='../vista/productos.php';
    location.href=pagina;
    "; 
    echo "</script>";  
  }else{
   echo "<script language='javascript'>"; 
   echo "function CustomAlert(){
    this.render = function(dialog){
      var winW = window.innerWidth;
      var winH = window.innerHeight;
      var dialogoverlay = document.getElementById('dialogoverlay');
      var dialogbox = document.getElementById('dialogbox');
      dialogoverlay.style.display = 'block';
      dialogoverlay.style.height = winH+'px';
      dialogbox.style.left = (winW/2) - (550 * .5)+'px';
      dialogbox.style.top = '100px';
      dialogbox.style.display = 'block';
      document.getElementById('dialogboxhead').innerHTML = 'Producto';
      document.getElementById('dialogboxbody').innerHTML = dialog;
    }
    this.ok = function(){
      document.getElementById('dialogbox').style.display = 'none';
      document.getElementById('dialogoverlay').style.display = 'none';
    }
  }
  var Alert = new CustomAlert();

  Alert.render('Error al Guardar los Datos');
  var pagina='../vista/productos.php';
  location.href=pagina;
  "; 
  echo "</script>";  
}
            $conexion = null;
    }

    function actualizar($Objproducto){

      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET fmodificado=:fmodificado,existencia=:existencia WHERE id_producto = :id_producto');
            $consulta->bindParam(':id_producto', $Objproducto->getIdProducto());
            $consulta->bindParam(':fmodificado', $Objproducto->getModificado());
            $consulta->bindParam(':existencia', $Objproducto->getExistencia());
        
        if($consulta->execute()){
          echo "<script language='javascript'>"; 
     echo "function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'Producto';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Actualizados Satisfactoriamente');
    var pagina='../vista/act_inventario.php';
    location.href=pagina;
    "; 
    echo "</script>";
        }
        $conexion = null;
      
    }





    function eliminar($Objproducto) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::tabla . ' WHERE id_producto = :id_producto');
        $consulta->bindParam(':id_producto', $Objproducto->getidproducto());
        if($consulta->execute()){
                        echo " 
                <script language='JavaScript'> 
                window.location='../vista/productos.php'
                </script>";
        }
        $conexion = null;
    }
function val($Objproducto){
$conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET existencia=:existencia WHERE id_producto = :id_producto');
            $consulta->bindParam(':id_producto', $Objproducto->getIdProducto());
            $consulta->bindParam(':existencia', $Objproducto->getExistencia());
            $consulta->execute();
$conexion = null;
}
    function modificar($Objproducto){

      $conexion = new conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET id_categoria = :id_categoria, id_subcategoria = :id_subcategoria, id_proveedor = :id_proveedor, 
        codigo = :codigo, descripcion = :descripcion, v_costo = :v_costo, venta_1 = :venta_1,venta_2 = :venta_2,venta_3 = :venta_3,venta_4 = :venta_4, p_utilidad = :p_utilidad,p_descuento = :p_descuento,stock_min = :stock_min, stock_max = :stock_max, medida = :medida, fmodificado=:fmodificado,observacion=:observacion
        WHERE id_producto = :id_producto');
            $consulta->bindParam(':id_producto', $Objproducto->getIdProducto());
            $consulta->bindParam(':id_categoria', $Objproducto->getIdcategoria());
            $consulta->bindParam(':id_subcategoria', $Objproducto->getIdsubcategoria());
            $consulta->bindParam(':id_proveedor', $Objproducto->getIdproveedor());
            $consulta->bindParam(':codigo', $Objproducto->getcodigo());
            $consulta->bindParam(':descripcion', $Objproducto->getdescripcion());
            $consulta->bindParam(':v_costo', $Objproducto->getVcosto());
            $consulta->bindParam(':venta_1', $Objproducto->getVenta1());
            $consulta->bindParam(':venta_2', $Objproducto->getVenta2());
            $consulta->bindParam(':venta_3', $Objproducto->getVenta3());
            $consulta->bindParam(':venta_4', $Objproducto->getVenta4());
            $consulta->bindParam(':p_utilidad', $Objproducto->getPrecutil());
            $consulta->bindParam(':medida', $Objproducto->getMedidad());
            $consulta->bindParam(':p_descuento', $Objproducto->getPorcdescuento());
            $consulta->bindParam(':stock_min', $Objproducto->getStockmin());
            $consulta->bindParam(':stock_max', $Objproducto->getStockmax());
            $consulta->bindParam(':fmodificado', $Objproducto->getModificado());
            $consulta->bindParam(':observacion', $Objproducto->getObservaciones());
        
        if($consulta->execute()){
          echo "<script language='javascript'>"; 
     echo "function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'Producto';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Datos Editados Satisfactoriamente');
    var pagina='../vista/productos.php';
    location.href=pagina;
    "; 
    echo "</script>";
        }
        $conexion = null;
      
    }
function reservar($Objproducto){

    $conexion = new conexion();
         
      $consulta = $conexion->prepare('UPDATE ' . self::tabla . ' SET existencia=:existencia, reserva = :reserva WHERE id_producto = :id_producto');
      $consulta->bindParam(':reserva', $Objproducto->getReserva());
      $consulta->bindParam(':id_producto', $Objproducto->getIdProducto());
      $consulta->bindParam(':existencia', $Objproducto->getExistencia());
      if($consulta->execute()){

echo "<script language='javascript'>"; 
     echo "function CustomAlert(){
      this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = 'block';
        dialogoverlay.style.height = winH+'px';
        dialogbox.style.left = (winW/2) - (550 * .5)+'px';
        dialogbox.style.top = '100px';
        dialogbox.style.display = 'block';
        document.getElementById('dialogboxhead').innerHTML = 'Producto';
        document.getElementById('dialogboxbody').innerHTML = dialog;
      }
      this.ok = function(){
        document.getElementById('dialogbox').style.display = 'none';
        document.getElementById('dialogoverlay').style.display = 'none';
      }
    }
    var Alert = new CustomAlert();

    Alert.render('Reserva Aprovada');
    var pagina='../vista/inventario.php';
    location.href=pagina;
    "; 
    echo "</script>"; 


}            
                 $conexion = null;
    }

   

    function listar(){
      $conexion = new conexion();
      $consulta = $conexion->prepare('SELECT id_producto, id_categoria, id_subcategoria, id_proveedor, codigo, descripcion, v_costo, venta_1, p_utilidad, medida 
       FROM ' . self::tabla );
        $consulta->execute();
        $registro = $consulta->fetchAll();
         
      if ($registro) {
            return $registro;
        } else {
          return false;
        }

        $conexion = null;

    }
}

?>