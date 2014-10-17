<?php

class categoria{

    private $descripcion;
    private $observacion;
    private $fcreado;
    private $fmodificado;



    function __construct(){

        $this->descripcion="";
        $this->observacion="";
        $this->fcreado="";
        $this->fmodificado="";

    }

    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    function setobservacion($observacion){
        $this->observacion=$observacion;
    }

    function setfcreado($fcreado){
        $this->fcreado=$fcreado;
    }   
    
    function setfmodificado($fmodificado){
        $this->fmodificado=$fmodificado;
    }
    

    function getdescripcion(){
        return $this->descripcion;
    }


    function getobservacion(){
        return $this->observacion;
    }

    function getfcreado(){
        return $this->fcreado;
    }

    function getfmodificado(){
        return $this->fmodificado;
    }


}

?>

