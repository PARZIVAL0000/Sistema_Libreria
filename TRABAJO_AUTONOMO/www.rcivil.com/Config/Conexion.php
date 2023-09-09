<?php
	

	class Conexion{
		public static function conexion(){
			try {
				$bd_settings = "
					(DESCRIPTION =
					    (ADDRESS = (PROTOCOL = TCP)(HOST = ".HOST.")(PORT = ".PORT."))
						    (CONNECT_DATA =
						      (SERVER = DEDICATED)
						      (SERVICE_NAME = ".DB.")
					    	)
					)
				";

				//vamos a realizar un suo de PDO
				$db = new PDO('oci:dbname='.$bd_settings, USER, PASS);
				
				//vamos a declarar unas funciones adicionales.
				$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $db;
			} catch (Exception $e) {
				echo "***** ERROR EN LA CONEXION *****";
				echo "* ERROR : " . $e->getMessage();
			}
		}
	}
?>