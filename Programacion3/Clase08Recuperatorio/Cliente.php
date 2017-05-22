<?php
    include_once("AccesoDatos.php");

class Cliente
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
    public $nombre;
    public $correo;
    public $edad;
    public $clave;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($nombre=NULL, $correo=NULL, $edad=NULL, $clave=NULL)
	{
		if($nombre !== NULL && $correo !== NULL && $edad !== NULL && $clave !== NULL){
			$this->nombre = $nombre;
			$this->correo = $correo;
			$this->edad = $edad;
			$this->$clave = $edad;
		}
	}

}