<?php
	ini_set('display_errors', 1);
	/**
	 * @author Nolberto Ortiz
	 */
	#define('CARPETA_CONT', __DIR__.'/controladores/');
	
	require_once __DIR__.'/utilidades/gen.php';
	echo "asd";
	if (!Sesion::check() || 1 != 1) {
		require_once CARPETA_CONT.'login_controlador.php';
		$controlador = new LoginControlador('ingreso');
	}
	else{
		$modulo=get('modulo');
		$accion=get('accion');
		
		if($modulo != null){
			$archivo = $modulo.'_controlador.php';

			require_once CARPETA_CONT.$archivo;
			$clase = ucfirst($modulo);
			$clase.='Controlador';

			$algo = new {$clase}($accion);
		}else{
			require_once CARPETA_CONT.'inicio_controlador.php';
			if($accion == null)
				$accion = 'index';
			$controlador = new InicioControlador($accion);

		}
	}

?>