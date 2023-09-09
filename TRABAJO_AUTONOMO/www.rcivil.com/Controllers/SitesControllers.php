<?php
	class SitesControllers{
		private $cliente;

		public function __construct(){
			require_once "./Models/Cliente.php";
			$this->cliente = new Cliente();
		}


		public function index(){
			//podemos generar el consumo dentro de esta parte de nuestro controlador...
			require_once "./Views/Registro_Civil/index.php";

		}


		public function guardar(){
			$this->cliente->setLibro_autor($_POST['Autor']);
			$this->cliente->setLibro_codigo($_POST['Codigo']);
			$this->cliente->setLibro_fecha($_POST['Fecha']);
			$this->cliente->setLibro_genero($_POST['Genero']);
			$this->cliente->setLibro_nombre($_POST['Nombres']);

			$respuesta = $this->cliente->guardar();

			require_once "./Views/Registro_Civil/index.php";
		}


		public function listar(){
			$informacion["data"] = $this->cliente->listar();

			require_once "./Views/Registro_Civil/cliente.php";
		}

		//funciones adicionales que nos servira para consumir la API REST
		public function verificar(){
			$codigo = $_POST['Codigo'];
			$respuesta = file_get_contents("http://localhost:9090/LibroControllers/$codigo");
			$registro = json_decode($respuesta);
			require_once "./Views/Registro_Civil/guardar.php";
		}

		public function eliminar($id){
		
			$resultado = $this->cliente->eliminar($id);

			if($resultado){
				$this->listar();
			}
		}

		public function actualizar($id){
			//tenemos que traernos solo los datos del usuario con el identificador obtenido...
			$informacion["data"] = $this->cliente->listarId($id);
			require_once "./Views/Registro_Civil/actualizar.php";
		}

		public function modificar(){
			$this->cliente->setLibro_id($_POST['Identificador']);
			$this->cliente->setLibro_autor($_POST['Autor']);
			$this->cliente->setLibro_codigo($_POST['Codigo']);
			$this->cliente->setLibro_fecha($_POST['Fecha']);
			$this->cliente->setLibro_genero($_POST['Genero']);
			$this->cliente->setLibro_nombre($_POST['Nombres']);

			$resultado = $this->cliente->actualizar();

			if($resultado){
				$this->listar();
			}
		}

	}
?>