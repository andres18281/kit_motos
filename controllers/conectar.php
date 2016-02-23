
<?php
 
 
/**
 * Clase para acceso a datos
 * @package dbAccess
 */

  class Conectar{
             
        //atributos
        public $host;
        public $user;
        public $pass; 
        public $mysqli;
        public $db;
	    public $array = array();
  
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

                                  
        public function Insertar_producto($cod,$descrip,$marca,$refe,$linea,$precio){
          $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta= 'INSERT INTO Producto_kit VALUES ("'.$cod.'",'.$descrip.','.$marca.','.$refe.',null,'.$precio.')';
              // echo $inserta.'<br>';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }

        public function Insertar_cantidad($cod,$nomb){
           $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta='INSERT INTO Produc_cantidad_producto VALUES (null,'.$cod.','.$nomb.')';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }

        public function Insertar_descripcion($nomb){
           $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta='INSERT INTO Produc_descripcion_ VALUES (null,"'.$nomb.'")';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }
        public function Insertar_referencia($nomb){
           $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta='INSERT INTO produc_referencia VALUES (null,"'.$nomb.'")';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
         }

        public function Insertar_marca($marca){
           $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta='INSERT INTO Produc_Marca VALUES (null,"'.$marca.'")';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }

        public function Insertar_precio($id,$precio){
           $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");
            if($this->connect()){
               $inserta='INSERT INTO Produc_Precio VALUES (null,'.$id.','.$precio.')';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }

        public function inserta($tablas,$params = array()){
            $array = array("mensaje"=>"Hay un problema interno que debe solucionarse",
                           "error"=>"hubo un error al inicio");

            if($this->connect()){
             if(isset($tablas)){
                //  $inserta = 'INSERT INTO '.$tablas.' ('.implode("','",array_keys($parametros)).'") VALUES ("'.implode("','",$parametros).'")"';
               $inserta='INSERT INTO `'.$tablas.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
                $insercion = $this->mysqli->query($inserta);
                if($insercion){
                    $array = array("exito"=>"Insercion con exito",
                                   "last_cod_id"=>$this->mysqli->insert_id,
                                   "mensaje"=>"Si inserto");
                }else{
                    $array = array("error"=>$this->mysqli->errno);
                }
              }
            }else{
             $array = array("mensaje"=>"No se pudo conectar a la base de datos, intentelo de nuevo",
                            "error"=>"hubo un error de conexion");
            }
            return $array;
        }


        public function consultas($sql){

           if($this->connect()){
              if($result = $this->mysqli->query($sql)){
                    if($result->num_rows == 1){
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        return $row;    
                    }elseif($result->num_rows > 1){
                      while($row = $result->fetch_array(MYSQLI_ASSOC)){
                       // $array = Array("codigo"=>$row);
                        $array_[] = $row;
                      }
                      $this->close_conection();
                      return $array_;
                        
                    //$this->mysqli->free_result($result);
                    }else{
                //  $this->close_conection();
                      return null;
                    }
           }
        }
        $this->close_conection();
      }

      public function update_query($query){
        if($this->connect()){
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
    }

    public function consulta_usuario($user,$pass){
      if($this->connect()){
        $sql = "SELECT user.Id_users,cli.email_user,user.tipo_rol
                FROM users_count user
                INNER JOIN clientes_kit_motos cli ON cli.Usua_id = user.Id_users 
                WHERE user.Id_users = ".$user.' 
                OR cli.email_user = "'.$user.'" 
                AND user.passwrd_ = "'.$pass.'"';
        if($result = $this->mysqli->query($sql)){
          if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_NUM);
            return $row;    
            $this->close_conection();
          }else{
           return null;
        }
      }
    }
   }



        public function close_conection(){
            
            $this->mysqli->close();
	      //  unset($this->mysqli);
        }


}


 
?>
























 