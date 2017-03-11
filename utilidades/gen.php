<?php

function get($clave){
	if(!isset($_GET[$clave]))
		return null;
	return $_GET[$clave];

}
	class Sesion{
		public static function check(){
			if (isset($_SESSION["usuario"])) {
				return true;
			}
			return false;

		}
	}