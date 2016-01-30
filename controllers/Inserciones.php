<?php

include_once('conexion.php');
include_once('Cifrado.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
class Inserciones extends conexion{
	
	public function __construct(){
		parent::__construct();
		parent::connect();
	}

	public function inserta_actividad($fecha,$comuna,$nombre,$direccion,$barrio,$proyeccion,$id_responsable,$costo,$estado){
		$array = array("mensaje"=>"Hay un problema interno que debe solucionarse");
		if($this->connect()){
				$sql = "INSERT INTO Actividad VALUES(null,'$fecha',$comuna,'$nombre','$direccion',$barrio,$proyeccion,$id_responsable,$costo,$estado)";
				
				$insercion = $this->mysqli->query($sql);
				if($insercion){
					$array = array("exito"=>"Insercion con exito",
						           "last_cod_id"=>$this->mysqli->insert_id);
				}else{
					$array = array("error"=>$this->mysqli->errno);
				}
		}else{
			$array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo");
		}
		return $array;
	}

	public function inserta_alfrintrion($name,$ciudad,$comuna,$barrio,$direccion,$telefono,$responsable,$id){
		$array = array("mensaje"=>"Hay un problema interno que debe solucionarse");
		if($this->connect()){
				$sql = 'INSERT INTO Comunas VALUES(null,"'.$name.'",'.$ciudad.','.$comuna.',"'.$barrio.'","'.$direccion.'",'.$telefono.',"'.$responsable.'",'.$id.')';
				$insercion = $this->mysqli->query($sql);
				if($insercion){
					$array = array("exito"=>"Insercion con exito",
						           "last_cod_id"=>$this->mysqli->insert_id);
				}else{
					$array = array("error"=>$this->mysqli->errno);
				}
		}else{
			$array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo");
		}
		return $array;
	}

	public function inserta_agenda($fecha,$estado){
		$array = array("mensaje"=>"Hay un problema interno que debe solucionarse");
		if($this->connect()){
				$sql = 'INSERT INTO Agenda VALUES(null,"'.$fecha.'",'.$estado.')';
				
				$insercion = $this->mysqli->query($sql);
				if($insercion){
					$array = array("exito"=>"Insercion con exito",
						           "last_cod_id"=>$this->mysqli->insert_id);
				}else{
					$array = array("error"=>$this->mysqli->errno);
				}
		}else{
			$array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo");
		}
		return $array;
	}

	
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

	public function Cerrar_Conexion(){
		parent::close();	
	}
}
?>