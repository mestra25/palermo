<?php

class categoria{
    private $id_categoria;
    private $descripcion;
    private $observacion;
    private $fcreado;
    private $fmodificado;
    private $nueva;

    function __construct(){

        
        $this->id_categoria=0;
        $this->nueva=0;
        $this->descripcion="";
        $this->observacion="";
        $this->fcreado="";
        $this->fmodificado="";

    }
    function setid_categoria($id_categoria){
        $this->id_categoria=$id_categoria;
    }
    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    function setnueva($nueva){
        $this->nueva=$nueva;
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
    function getid_categoria(){
        return $this->id_categoria;
    }
    function getnueva(){
        return $this->nueva;
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

