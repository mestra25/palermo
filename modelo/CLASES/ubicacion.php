<?php

class ubicacion{

    private $id_ubicacion;
    private $descripcion;
    private $nueva;
    function __construct(){

        $this->id_ubicacion=0;
        $this->descripcion="";

    }

    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    function setnueva($nueva){
        $this->nueva=$nueva;
    }

     function setid_ubicacion($id_ubicacion){
        $this->id_ubicacion=$id_ubicacion;
    }
    function getnueva(){
        return $this->nueva;
    }
    function getdescripcion(){
        return $this->descripcion;
    }
        function getid_ubicacion(){
        return $this->id_ubicacion;
    }
   } 
?>

