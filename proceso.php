<?php
if(!isset($_SESSION)){
 session_start();
}
 if(isset($_SESSION['perfil']) and $_SESSION['perfil'] == "asdqweasd5654184"){ 
   require_once "controllers/factura/guarda_factura.php";
   $id = $_SESSION['id_usuario'];
   $factura = new guarda_factura($id);
   $factura->facturar_detalles();
   $verifi = $factura->agrega_facturacion_db();
   if($verifi){
   	 header("location: finalizado.php");
   }else{
   	 echo "existe un problema, por favor reportelo";
   }
 }else{
 	header("location: loguear.php?com=1");
 }

?>