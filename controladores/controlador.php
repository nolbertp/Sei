<?php
/**
 * @author Nolberto Ortiz
 */
/**
* 
*/
class Controlador{
	
	function __construct($accion){
		$this->{$accion}();
	}
	public function mostrarVista($vista){
		require_once __DIR__.'/../vistas/'.$vista.'.php';
	}
}