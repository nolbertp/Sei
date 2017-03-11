<?php
/**
 * @author Nolberto Ortiz
 */
require_once __DIR__."/conexion.php";

class Modelo{
	protected $campos = [];
	protected $valores = [];
	protected $tabla = "";
	protected $conexion = new Conexion;

	public static function encuentrar(){

	}
	public static function encuentrarPor(){

	}
	public static function todos(){
		$consulta = 'SELECT * FROM '.$table;
		$resultado = null;
		$objetos = [];
		try{
			
			$query = $this->conexion->prepare($consulta);
			$query->execute();
			$this->con->close_con();
			$resultado = $query->fetchAll();
		
		} catch(PDOException $e) {

	        echo  $e->getMessage(); 
	    }
	    foreach ($resultado as $objeto){
	    	$objetos[] = $objeto;
	    }
	    return $objetos;
	}
	public function borrar(){

	}
	public function actualizar(){

	}
	public function crear(){
		$consulta = "INSERT INTO ".$tabla." (";
		for ($i=0; $i < count($campos); $i++) { 
			$consulta.=$campos[$i];
			if($i < count($campos)-1)
				$consulta.=", ";
		}
		$consulta.=') VALUES (';
		for ($i=0; $i < count($campos); $i++) { 
			$consulta.='?';
			if($i < count($campos)-1)
				$consulta.=", ";
		}
		$consulta.=')';
		try{
			$query = $this->conexion->prepare($consulta);
			for ($i=0; $i < count($campos); $i++){ 
				$query->bindParam($i+1,$valores[$campos[$i]]);
			}
			$query->execute();
			$this->conexion->cerrar();
		
		} catch(PDOException $e) {
	        echo  $e->getMessage(); 
	    }

	}
}