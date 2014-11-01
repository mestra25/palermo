<?php

class subcategoria{
	private $id_categoria;
	private $id_subcategoria;
	private $descripcion;
	private $observacion;
	private $fcreado;
	private $fmodificado;



	function __construct(){

		$this->id_categoria=0;
		$this->id_subcategoria=0;
		$this->descripcion="";
		$this->observacion="";
		$this->fcreado="";
		$this->fmodificado="";

	}

	function setdescripcion($descripcion){
		$this->descripcion=$descripcion;
	}

	function setid_subcategoria($id_subcategoria){
		$this->id_subcategoria=$id_subcategoria;
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
	

	function getdescripcion(){
		return $this->descripcion;
	}

	function getid_subcategoria(){
		return $this->id_subcategoria;
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

