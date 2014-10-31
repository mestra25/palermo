<?php

class medida{

    private $id_medida;
    private $descripcion;

    function __construct(){

        $this->id_medida=0;
        $this->descripcion="";

    }

    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

     function setid_medida($id_medida){
        $this->id_medida=$id_medida;
    }
    function getdescripcion(){
        return $this->descripcion;
    }
        function getid_medida(){
        return $this->id_medida;
    }
   } 
?>

