<?php
	//este sera nuestro router
	require_once "./Config/Parametros.php";
	require_once "./Config/Conexion.php";
	require_once "./Core/router.php";
	require_once "./Controllers/SitesControllers.php";

	if(isset($_GET["control"])){
		$cargarControlador = CargarControlador($_GET["control"]);

		if(isset($cargarControlador)){
			
			if(isset($_GET['accion'])){	

				if(isset($_GET['id'])){
					CargarAccion($cargarControlador, $_GET['accion'], $_GET['id']);
				}else{
					//debemos recargar en este momento es nuestra funcionalidad a querer ejecutar.
					CargarAccion($cargarControlador, $_GET['accion']);
				}

			}else{
				$cargarControlador->index();
			}
		}
	}else{
		$controlador = new SitesControllers();
		$controlador->index();
	}
?>