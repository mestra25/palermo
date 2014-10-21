<?php
require_once('producto.php');
class producto {
    private $IdProducto;
    private $Idcategoria;
    private $Idsubcategoria;
    private $Idproveedor;
    private $Codigo;
    private $Descripcion;
    private $Vcosto;
    private $Venta1;
    private $Venta2;
    private $Venta3;
    private $Venta4;
    private $Precutil;
    private $Medidad;
    private $Porcdescuento;
    private $Stockmin;
    private $Stockmax;
    private $Creadofec;
    private $Modificado;
    private $Existencia;
    private $Reserva;
    private $Observaciones;
  

function __construct() {
   $this->IdProducto = 0;
   $this->Idcategoria = 0;
   $this->Idsubcategoria=0;
   $this->Idproveedor=0;
   $this->Codigo="";
   $this->Descripcion="";
   $this->Vcosto=0;
   $this->Venta1=0;
   $this->Venta2=0;
   $this->Venta3=0;
   $this->Venta4=0;
   $this->Precutil=0;
   $this->Medidad="";
   $this->Porcdescuento=0;
   $this->Stockmin=0;
   $this->Stockmax=0;
   $this->Creadofec="";
   $this->Modificado="";
   $this->Existencia=0;
   $this->Reserva=0;
   $this->Observaciones="";


}

function setIdProducto($IdProducto){
$this->IdProducto= $IdProducto;
}

function setIdcategoria($Idcategoria){
$this->Idcategoria= $Idcategoria;
}

function setIdsubcategoria($Idsubcategoria){
$this->Idsubcategoria= $Idsubcategoria;
}

function setIdproveedor($Idproveedor){
$this->Idproveedor= $Idproveedor;
}
function setCodigo($Codigo){
$this->Codigo= $Codigo;
}
function setDescripcion($Descripcion){
$this->Descripcion= $Descripcion;
}

function setVcosto($Vcosto){
$this->Vcosto= $Vcosto;
}

function setVenta1($Venta1){
$this->Venta1= $Venta1;
}
function setVenta2($Venta2){
$this->Venta2= $Venta2;
}
function setVenta3($Venta3){
$this->Venta3= $Venta3;
}
function setVenta4($Venta4){
$this->Venta4= $Venta4;
}


function setPrecutil($Precutil){
$this->Precutil= $Precutil;
}

function setMedidad($Medidad){
$this->Medidad= $Medidad;
}

function setPorcdescuento($Porcdescuento){
$this->Porcdescuento= $Porcdescuento;
}

function setStockmin($Stockmin){
$this->Stockmin= $Stockmin;
}

function setStockmax($Stockmax){
$this->Stockmax= $Stockmax;
}

function setCreadofec($Creadofec){
$this->Creadofec= $Creadofec;
}

function setModificado($Modificado){
$this->Modificado= $Modificado;
}

function setExistencia($Existencia){
$this->Existencia= $Existencia;
}

function setReserva($Reserva){
$this->Reserva= $Reserva;
}

function setObservaciones($Observaciones){
$this->Observaciones= $Observaciones;
}

function getIdProducto(){
return $this->IdProducto;
}
function getIdcategoria(){
return $this->Idcategoria;
}
function getIdsubcategoria(){
return $this->Idsubcategoria;
}
function getIdproveedor(){
return $this->Idproveedor;
}
function getVcosto(){
return $this->Vcosto;
}
function getCodigo(){
return $this->Codigo;
}
function getDescripcion(){
return $this->Descripcion;
}
function getVenta1(){
return $this->Venta1;
}
function getVenta2(){
return $this->Venta2;
}

function getVenta3(){
return $this->Venta3;
}
function getVenta4(){
return $this->Venta4;
}

function getPrecutil(){
return $this->Precutil;
}
function getMedidad(){
return $this->Medidad;
}
function getPorcdescuento(){
return $this->Porcdescuento;
}
function getStockmin(){
return $this->Stockmin;
}

function getStockmax(){
return $this->Stockmax;
}

function getCreadofec(){
return $this->Creadofec;
}

function getModificado(){
return $this->Modificado;
}

function getExistencia(){
return $this->Existencia;
}

function getReserva(){
return $this->Reserva;
}

function getObservaciones(){
return $this->Observaciones;
}


} //fin de la clase
?>