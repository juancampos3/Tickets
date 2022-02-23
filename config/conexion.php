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
    }
?>