<?php 
ini_set('display_errors', 1);
require_once __DIR__ ."/controlador.php";
require_once __DIR__."/../modelos/usuario.php"

class PruebasControlador extends Controlador{

	function __construct($accion){
		
		parent:: __construct($accion);
	}
	public function probar(){
		$todos = Usuario::todos();
		var_dump($todos);
	}

}
