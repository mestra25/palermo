<?php
class proveedor {
    private $idproveedor;
    private $nit;
    private $nombre_empresa;
    private $direccion;
    private $telefono;
    private $email;
    private $web;
    private $contac;
    private $replegal;
    private $cedRep;
    private $celRep;
function __construct() {
    
    $this->nit="";
    $this->nombre_empresa="";
    $this->direccion="";
    $this->telefono=0;
    $this->email="";
    $this->web="";
    $this->contac="";
    $this->replegal="";
    $this->cedRep=0;
    $this->celrep=0;
    $this->idproveedor=0;

    }

function setNit($nit){
$this->nit= $nit;
}
function setNombreEmpresa($nombre_empresa){
$this->nombre_empresa= $nombre_empresa;
}
function setDireccion($direccion){
$this->direccion= $direccion;
}
function setTelefono($telefono){
$this->telefono= $telefono;
}
function setEmail($email){
$this->email= $email;
}
function setWeb($web){
$this->web= $web;
}
function setContac($contac){
$this->contac= $contac;
}
function setReplegal($replegal){
$this->replegal= $replegal;
}
function setCedRep($cedRep){
$this->cedRep= $cedRep;
}
function setCelrep($celrep){
$this->celrep= $celrep;
}
function setIdproveedor($idproveedor){
$this->idproveedor= $idproveedor;
}

function getIdproveedor(){
return $this->idproveedor;
}

function getNombreEmpresa(){
return $this->nombre_empresa;
}
function getNit(){
return $this->nit;
}

function getDireccion(){
return $this->direccion;
}

function getTelefono(){
return $this->telefono;
}
function getEmail(){
return $this->email;
}

function getWeb(){
return $this->web;
}

function getContac(){
return $this->contac;
}

function getReplegal(){
return $this->replegal;
}
function getCedrep(){
return $this->cedRep;
}
function getCelrep(){
return $this->celrep ;
}

}
?>