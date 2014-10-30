<?php

class categoria{
    private $id_categoria;
    private $descripcion;
    private $observacion;
    private $fcreado;
    private $fmodificado;



    function __construct(){
<<<<<<< HEAD
         $this->id_categoria=0;
=======

        $this->id_categoria=0;
>>>>>>> origin/master
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


    function setid_categoria($id_categoria){
        $this->id_categoria=$id_categoria;
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
    
    function getid_categoria(){
        return $this->id_categoria;
    }
    function getdescripcion(){
        return $this->descripcion;
    }
    function getid_categoria(){
        return $this->id_categoria;
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

