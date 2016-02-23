<?php
<<<<<<< HEAD
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
=======
 include_once("consultas.php");

 if(isset($_REQUEST['consult_product'])){
 	$consultar_ = new Consultas();
 	$nomb = $_REQUEST['consult_product'];
 	$sql = 'SELECT Produc_id, Descri_nomb, Marca_nomb, Referenc_nomb, Precio_cost
			FROM Producto_kit Pro_kit
			INNER JOIN Produc_descripcion_ Pd ON Pd.Descri_id = Pro_kit.Produc_descr_id
			INNER JOIN Produc_Marca PM ON PM.Marca_id = Pro_kit.Produc_marc_id
			INNER JOIN Produc_Referencia PR ON PR.Referen_id = Pro_kit.Produc_referen_id
			INNER JOIN Produc_Precio PC ON PC.Precio_id_ = Pro_kit.Produc_id
			WHERE Pd.Descri_nomb LIKE  "%'.$nomb.'%"
			OR PR.Referenc_nomb LIKE  "%'.$nomb.'%"
			OR PM.Marca_nomb LIKE  "%'.$nomb.'%"
			OR Pro_kit.Produc_id LIKE  "%'.$nomb.'%"';
 	$data = $consultar_->consulta($sql);
 	print_r($data);
 	if(isset($data)){
 	  if(is_array($data[0])){
 	  	foreach($data as $key=>$value){
 	 	 	echo '
			 <tr>
	          <td>'.$value[0].'</td>
	          <td>'.$value[1].'</td>
	          <td>'.$value[2].'</td>
	          <td>'.$value[3].'</td>
	          <td>'.$value[4].'</td>
	          <td><a href="#" class="add_produc" id="'.$value[0].'">Agregar</a></td>
			 </tr>
 	  	 	';
 	  	}
 	  }else{
 	  	foreach($data as $val){
 	  	 	echo '
			 <tr>
	          <td>'.$val[0].'</td>
	          <td>'.$val[1].'</td>
	          <td>'.$val[2].'</td>
	          <td>'.$val[3].'</td>
	          <td>'.$val[4].'</td>
	          <td><a href="#" class="add_produc" id="'.$val[0].'">Agregar</a></td>
			 </tr>
 	  	 	';
 	  	 }
 	  }
 	}else{
 		echo 'No existen registros';
 	}
 }

>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80



?>