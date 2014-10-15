<?php

class cliente{

	private $Cedula;
	private $Nombre;
	private $Apellido;
	private $Celular;
	private $Direccion;
	private $Email;


	function __construct(){

		$this->Cedula=0;
		$this->Nombre="";
		$this->Apellido="";
		$this->Celular=0;
		$this->Direccion="";
		$this->Email="";
	}

	function setCedula($Cedula){
		$this->Cedula=$Cedula;
	}

	function setNombre($Nombre){
		$this->Nombre=$Nombre;
	}

	function setApellido($Apellido){
		$this->Apellido=$Apellido;
	}	
	
	function setCelular($Celular){
		$this->Celular=$Celular;
	}
	
	function setDireccion($Direccion){
		$this->Direccion=$Direccion;
	}

	function setEmail($Email){
		$this->Email=$Email;
	}


	function getCedula(){
		return $this->Cedula;
	}


	function getNombre(){
		return $this->Nombre;
	}

	function getApellido(){
		return $this->Apellido;
	}

	function getCelular(){
		return $this->Celular;
	}

	function getDireccion(){
		return $this->Direccion;
	}

	function getEmail(){
		return $this->Email;
	}
}

?>

