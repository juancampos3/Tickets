<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                /*Conexion Servidor */
                //$conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=u126133725_tickets","u126133725_juanjo","Juan1913");
                /* Conexion Local*/
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=tickets","root","");
                return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            /*Ruta Local */
            return "http://localhost/TICKETS";
            /*Ruta Servidor */
            //return "https://miegreso.com.co/";
            }
    }
?>