<?php
require_once __DIR__.'/controlador.php';

/**
* 
*/
class InicioControlador extends Controlador{
	
	function __construct($accion){
		$this->{$accion}();
	}
	function index(){
		$this->mostrarVista('inicio');
	}
}