<?php
require_once __DIR__"/modelo.php";
class Usuario extends Modelo{
	protected $campos = ['id', 'nombre'];
	protected $valores = [];
	protected $tabla = "usuarios";

}