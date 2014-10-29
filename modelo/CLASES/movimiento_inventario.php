<?php
class movimiento_inventario {
    private $id_consecutivo;
    private $codigo;
    private $cliente;
    private $usuario;
    private $cantidad;
    private $v_costo;
    private $impuesto;
    private $valor_venta;
    
function __construct() {
    
    $this->codigo=0;
    $this->cliente=0;
    $this->usuario=0;
    $this->cantidad=0;
    $this->v_costo=0;
    $this->impuesto=0;
    $this->valor_venta=0;
    

    }

function setcodigo($codigo){
$this->codigo= $codigo;
}
function setusuario($usuario){
$this->usuario= $usuario;
}
function setcantidad($cantidad){
$this->cantidad= $cantidad;
}
function setv_costo($v_costo){
$this->v_costo= $v_costo;
}
function setimpuesto($impuesto){
$this->impuesto= $impuesto;
}
function setvalor_venta($valor_venta){
$this->valor_venta= $valor_venta;
}
function setid_consecutivo($id_consecutivo){
$this->id_consecutivo= $id_consecutivo;
}

function getid_consecutivo(){
return $this->id_consecutivo;
}

function getcodigo(){
return $this->codigo;
}

function getusuario(){
return $this->usuario;
}

function getcantidad(){
return $this->cantidad;
}
function getv_costo(){
return $this->v_costo;
}

function getimpuesto(){
return $this->impuesto;
}

function getvalor_venta(){
return $this->valor_venta;
}


}
?>