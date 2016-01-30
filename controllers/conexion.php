<?php
 
 
/**
 * Clase para acceso a datos
 * @package dbAccess
 */

  class conexion{
             
        //atributos
        public $host;
        public $user;
        public $pass; 
        public $mysqli;
        public $db;
	  // public $array = array();
  
        public function __construct(){
            require_once ('conf.php'); 
       
                $this->host = HOST;
                $this->user = USER;
                $this->pass = PASS;
                $this->db = DB_;   
       

        }

        public function connect(){             
            return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db); 
               
              
        }

        public function close_conection(){
            
            return $this->mysqli->close();
	      //  unset($this->mysqli);
        }
}


 
?>
