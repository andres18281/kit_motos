<?php
 include_once $_SERVER['DOCUMENT_ROOT']."/kit_motos/models/Productos.php";


 if(isset($_POST['consult_product'])){
 	$produc = new Productos();
 	$nomb = $_POST['consult_product'];
 	$response = $produc->Buscar_producto($nomb);
 	echo json_encode($response);
 }
 
 if(isset($_POST['consult_product_'])){
 	$produc = new Productos();
 	$nomb = $_POST['consult_product_'];
 	$response = $produc->Buscar_producto_tow($nomb);
 	echo json_encode($response);
 }
 



 if(isset($_POST['marcas'])){
 	$marca = new Productos();
 	$response = $marca->Get_Marca();
 	if(isset($response)){
 	 if(is_array($response[0])){
 	 	foreach($response as $val){
 	 	  $respon[] = array("id"=>$val[0],"nombre"=>utf8_encode($val[1]));
 	 	}
 	 }else{
 	 	$respon = array("id"=>$val[0],"nombre"=>utf8_encode($val[1]));
 	 }	
 	 echo json_encode($respon);
 	}
 }
 if(isset($_POST['referen'])){
 	
 }

?>