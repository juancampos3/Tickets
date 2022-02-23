<?php
    session_start();
    
    class Conectar{
        protected $dbh;

        protected function Conexion(){
           try {
               $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=tickets","root", "");
               return $conectar;
            } catch (Exception $e){
               print "Error: " . $e->getMessage()."<br/>">;
               die();
           } 
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'UTF8'");
        }

        public function ruta(){
            return "http://localhost/TICKETS"
        }
    }
?>