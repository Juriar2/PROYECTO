<?php
   

    /* Inicializando la sesion del usuario */
   
    session_start();
    
    /*se inicaliza la  Clase Conectar */
    class Conectar{
        protected $dbh;

        /* Funcion Protegida de la cadena de Conexion */
        protected function Conexion(){
            try {
                /*TODO: Cadena de Conexion QA*/
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=itss","root","");
                // Cadena de Conexion Produccion*/
				//	$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=id18828628_itss","id18828628_itss1","p5@*@K8-4cIM#D3d");
				return $conectar;
			} catch (Exception $e) {
                /*TODO: En Caso hubiera un error en la cadena de conexion */
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        /*Para impedir que tengamos problemas con las ñ o tildes */
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        /* Ruta principal del proyecto */
        public static function ruta(){
            //QA
            return "https://localhost/itss/";
            
           
        }

    }
?>