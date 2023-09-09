<?php 

	//cargar por cada cambio nuestro controlador especificado.
	function CargarControlador($controlador){

		$controlador = ucwords($controlador)."Controllers";
		$fichero = "./Controllers/".ucwords($controlador)."Controllers.php";

		if(!is_file($fichero)){

			$controlador = "SitesControllers";
			$fichero = "./Controllers/SitesControllers.php";
		}


		require_once $fichero;
		$payload = new $controlador();
		return $payload;
	}

	//cargar cada una de las funcionalidades...
	function CargarAccion($controlador, $accion, $id = null){

		if(isset($accion) && method_exists($controlador, $accion)){
			
			if($id === null){
				$controlador->$accion();
			}else{
				//ejecutamos otro tipo de controlador...
				$controlador->$accion($id);
			}

		}
	}
?>