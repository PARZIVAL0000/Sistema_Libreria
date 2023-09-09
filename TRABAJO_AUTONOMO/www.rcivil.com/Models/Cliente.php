<?php 
	class Cliente{
		private $db;
		private $cliente;
		private $id;

		//vamos a definir nuestros atributos
		private $identificador;
		private $nombres;
		private $apellidos;
		private $direccion;
		private $cedula;
		private $telefono;


		private $libro_id;
		private $libro_autor;
		private $libro_codigo;
		private $libro_fecha;
		private $libro_genero;
		private $libro_nombre;

		public function __construct(){
			$this->db = Conexion::conexion();
			$this->cliente = array();
		}

		public function guardar(){
			try{
				//dentro de este punto debo ejecutar nuestra funcion de listarIdentificadores para ir
				//aumentando el identificador de cada registro, ya que este no se genera automaticamente.
				$id = $this->listarIdentificadores()[0]["libro_id"];
				$id += 1;

				$identificador = $id;
				$libro_autor = $this->getLibro_autor();
				$libro_codigo = $this->getLibro_codigo();
				$libro_fecha = $this->getLibro_fecha();
				$libro_genero = $this->getLibro_genero();
				$libro_nombre = $this->getLibro_nombre();

				$sql = "INSERT INTO libro(libro_id, libro_autor, libro_codigo, libro_fecha, libro_genero, libro_nombre) VALUES(?, ?, ?, TO_DATE(?, 'YYYY-MM-DD'), ?, ?)";


				$cmd = $this->db->prepare($sql);
				$cmd->bindParam(1, $identificador);
				$cmd->bindParam(2, $libro_autor);
				$cmd->bindParam(3, $libro_codigo);
				$cmd->bindParam(4, $libro_fecha);
				$cmd->bindParam(5, $libro_genero);
				$cmd->bindParam(6, $libro_nombre);
			    $query = $cmd->execute();

				return $query;
			}catch(Exception $e){
				//no controlaremos por el momento algun error.
				echo $e->getMessage();
			}
						
		}

		public function listarIdentificadores(){
			try {
				$sql = "SELECT libro_id FROM libro ORDER BY libro_id DESC";
				$cmd = $this->db->prepare($sql);
			
				if($cmd->execute()){
					//vamos a desglosar a continuacion nuestros atributos correspondientes....
					while($row = $cmd->fetch(PDO::FETCH_ASSOC)){
						
						$this->cliente[] = $row;
					}

				}

				return $this->cliente;
			} catch (Exception $e) {
				echo "ERROR LISTAR ID : " . e.getMessage();
			}
		}

		public function listar(){
			try{
				$sql = "SELECT libro_id, libro_autor, libro_codigo, libro_fecha, libro_genero, libro_nombre FROM libro";
				$cmd = $this->db->prepare($sql);
			
				if($cmd->execute()){

					//vamos a desglosar a continuacion nuestros atributos correspondientes....
					while($row = $cmd->fetch(PDO::FETCH_ASSOC)){
						
						$this->cliente[] = $row;
					}

				}

				return $this->cliente;
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		public function listarId($id){
			try{
				$sql = "SELECT libro_id, libro_autor, libro_codigo, libro_fecha, libro_genero, libro_nombre FROM libro WHERE libro_id=?";
				$cmd = $this->db->prepare($sql);
				$cmd->bindParam(1, $id);
				
				if($cmd->execute()){
					while($row = $cmd->fetch(PDO::FETCH_ASSOC)){
						$this->cliente[] = $row;
					}
				}

				return $this->cliente;

			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		public function eliminar($id){
			try {
				$sql = "DELETE FROM libro WHERE libro_id=?";
				$cmd = $this->db->prepare($sql);
				$cmd->bindParam(1, $id);
				$query = $cmd->execute();

				if($query){
					return true;
				}

				return false;

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function actualizar(){
			try{

				$identificador = $this->getLibro_id();
				$libro_autor = $this->getLibro_autor();
				$libro_codigo = $this->getLibro_codigo();
				$libro_fecha = $this->getLibro_fecha();
				$libro_genero = $this->getLibro_genero();
				$libro_nombre = $this->getLibro_nombre();

				$sql = "UPDATE libro SET libro_autor = ?, libro_codigo = ?, libro_fecha = ?, libro_genero = ?, libro_nombre = ? WHERE libro_id = ?";
				$cmd = $this->db->prepare($sql);
				$cmd->bindParam(1, $libro_autor);
				$cmd->bindParam(2, $libro_codigo);
				$cmd->bindParam(3, $libro_fecha);
				$cmd->bindParam(4, $libro_genero);
				$cmd->bindParam(5, $libro_nombre);
				$cmd->bindParam(6, $identificador);

				$query = $cmd->execute();

				if($query){
					return true;
				}

				return false;
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		//el getter y setter de nuestro identificador unico.
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}




		//setter and getter.
		public function getLibro_id(){
			return $this->libro_id;
		}
		public function setLibro_id($libro_id){
			$this->libro_id = $libro_id;
		}

		public function getLibro_autor(){
			return $this->libro_autor;
		}
		public function setLibro_autor($libro_autor){
			$this->libro_autor = $libro_autor;
		}

		public function getLibro_codigo(){
			return $this->libro_codigo;
		}
		public function setLibro_codigo($libro_codigo){
			$this->libro_codigo = $libro_codigo;
		}

		public function getLibro_fecha(){
			return $this->libro_fecha;
		}
		public function setLibro_fecha($libro_fecha){
			$this->libro_fecha = $libro_fecha;
		}

		public function getLibro_genero(){
			return $this->libro_genero;
		}
		public function setLibro_genero($libro_genero){
			$this->libro_genero = $libro_genero;
		}

		public function getLibro_nombre(){
			return $this->libro_nombre;
		}
		public function setLibro_nombre($libro_nombre){
			$this->libro_nombre = $libro_nombre;
		}		



		public function getIdentificador(){
			return $this->identificador;
		}

		public function setIdentificador($id){
			$this->identificador = $id;
		}

		public function setNombres($nombres){
			$this->nombres = $nombres;
		}

		public function getNombres(){
			return $this->nombres;
		}

		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}

		public function getDireccion(){
			return $this->direccion;
		}

		public function setCedula($cedula){
			$this->cedula = $cedula;
		}

		public function getCedula(){
			return $this->cedula;
		}

		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getTelefono(){
			return $this->telefono;
		}
	}
?>