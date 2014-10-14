<?php
require_once('producto.php');
class testigo extends persona {
    private $PersonaCedula;
    private $ContrayenteCedula;
    private $Tipo;
  

function __construct() {
   $this->IdProducto = 0;
   $this->Idcategoria = 0;
   $this->Idsubcategoria=0;
   $this->Descripcion="";
   $this->Vcosto=0;
   $this->Venta1=0;
   $this->Venta2=0;
   $this->Venta3=0;
   $this->Venta4=0;
   $this->Precutil=0;
   $this->Medidad=0;
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
function setVenta3($Venta){
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

function getVcosto(){
return $this->Vcosto;
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
return $this->Precuti;
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

}
} //fin de la clase
?>