<?php 
require_once __DIR__ ."/controlador.php";
require_once __DIR__."/../modelos/usuario.php"

class LoginControlador extends Controlador{

	function __construct($accion){
		parent:: __construct($accion);
	}
	public function ingreso(){	
		$this->mostrarVista('login');
	}

	public function ingresar(){
	//	$this->
		$u = new Usuario;
	}

}
