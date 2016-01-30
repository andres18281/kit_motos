<?php
include_once('conexion.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
	 class Consultas extends conexion {
		public function __construct(){			
			parent::__construct();
			
		}
		public function error(){
			return parent::connect();	
		}
		// funcion para loguear un usuario con usuario y contraseña
		public function consulta($sql){
			if(parent::connect()){
				$sql = "SELECT Marca_id,Marca_nomb
 			 			FROM Produc_Marca";
				// Usua_id = usuario, Usua_rol = Id del rol, Tipo_nomb = Nombre del rol, Rol_pass = password del rol
				if($result = $this->mysqli->query($sql)){
					if($result->num_rows == 1){	
						$row = $result->fetch_array(MYSQL_NUM);		        	
			        	return $row;
			    	}elseif($result->num_rows > 1){
			    		while($row = $result->fetch_array()){
 						 $var[] = $row;
			    		}
			    		return $var;
			    	}
			    	$this->close_conection();
			    	//$this->mysqli->free_result($result);
				}else{
				//	$this->close_conection();
					return null;
				}
			}else{
				echo "no conecta";
			}
			//}else{
			//	return null; 	
		//	}					
		}

		public function buscar_session(){
			
			if($result = $this->mysqli->query($sql)){
					if($result->num_rows > 0){
						$row = $result->fetch_array(MYSQL_NUM);
						return $row;	        	
			    	}else{
			    		return null;
			    	}
			    //	$this->close_conection();
			    	//$this->mysqli->free_result($result);
			}else{
				//	$this->close_conection();
				return null;
			}			
		}
		public function consulta_marca(){
			$sql = "SELECT Marca_id,Marca_nomb
 			 			FROM Produc_Marca";
			if($result = $this->mysqli->query($sql)){
					if($result->num_rows == 1){	
						$row = $result->fetch_array(MYSQL_NUM);	
			        	return $array;
			    	}elseif($result->num_rows > 1){
			    		while($row = $result->fetch_array()){
 						 $var[] = $row;
			    		}
			    		return $var;
			    	}
			    	//$this->mysqli->free_result($result);
			}else{
				//	$this->close_conection();
				$this->close_conection();
				return null;
			}		
			$this->close_conection();
		}

		//public function cerrar_conexion(){
		//	$this->close_conection();
		//}

		public function update_query($query){
           $salida = array("error"=> "Problemas al actualizar datos.");
           if($this->mysqli->query($query)){
           		if($this->mysqli->affected_rows > 0){
                  $salida = array("exito"=> "Datos actualizados con exito\n Filas afectadas: ".$this->mysqli->affected_rows);                  
           		}else{
                  $salida = array("error"=> "Problemas al actualizar datos\n Filas afectadas: ".$this->mysqli->affected_rows,
                                  "codigo"=>$this->mysqli->errno);                   
            	}                                          
     		}else{
     			$salida = array("error"=>"Problemas, no hay actualizacion",
                          "codigo"=>$this->mysqli->errno);
     		}
     		return $salida;    
     	}



		
		public function sanitize($val){
        	return $this->mysqli->real_escape_string($val);                
   	 	}   
}

?>