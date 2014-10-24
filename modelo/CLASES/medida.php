<?php

class medida{

    private $descripcion;

    function __construct(){

        $this->descripcion="";

    }

    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

 
    function getdescripcion(){
        return $this->descripcion;
    }
   } 
?>

