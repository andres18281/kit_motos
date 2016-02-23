<?php
if(!isset($_SESSION)) { 
session_start(); 
}
  include_once('Conectar.php');
  class Login {    
      public $user;
      public $pass;
      public function __construct($user,$pass){
        $this->user = $user;
        $this->pass = $pass;
      }
      public function loguearse(){
        if(!isset($_SESSION["perfil"],$_SESSION["pass"])){
          
        }
        $consulta = new Conectar(); 
        $tipo_usuario = $consulta->consulta_usuario($this->user,$this->pass);
        if(isset($tipo_usuario)){
          if($tipo_usuario[2] == 'cliente'){
             $_SESSION["perfil"] =  "asdqweasd5654184";
          }else if($tipo_usuario[2]  == 'empleado'){
             $_SESSION["perfil"] = "qwqwsa123423@!";
          }
          $_SESSION["id_usuario"] = $tipo_usuario[0]; // id del usuario
          $_SESSION["id_mail"] = $tipo_usuario[1];// nombre del perfil (administrador, cliente, etc..) 
          return true;
        }else{
          return false;
        }
      }
  }
?>