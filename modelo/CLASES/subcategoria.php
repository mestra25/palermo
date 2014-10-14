<?php
require_once('persona.php');

class celebrante extends persona {
private $idParroquia;
private $PersonaCedula;
private $Estado;

function __construct() {
	 $this->idsubcategoria=0;
    $this->idcategoria=0;
    $this->descripcion="";
    $this->creado="";
    $this->modificado="";
    $this->observacion="";

}
function setIdsubcategoria($idsubcategoria){
$this->idsubcategoria= $idsubcategoria;
}
function setIdcategoria($idcategoria){
$this->idcategoria= $idcategoria;
}


function setDescripcion($descripcion){
$this->descripcion= $descripcion;
}

function setEstado($Estado){
$this->Estado= $Estado;
}

function setCreado($creado){
$this->creado= $creado;
}
function setModificado($modificado){
$this->modificado= $modificado;
}
function setObservacion($observacion){
$this->observacion= $observacion;
}

function getIdsubcategoria(){
	return $this->idsubcategoria;
}

function getIdcategoria(){
	return $this->idcategoria;
}

function getDescripcion(){
	return $this->descripcion;
}

function getCreado(){
return $this->creado;
}
function getModificado(){
return $this->modificado;
}

function getObservacion(){
return $this->observacion;
}

      
}//fin de la clase

?>