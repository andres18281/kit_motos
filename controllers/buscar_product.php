<?php

 if(isset($_POST['product'])){
 	include_once('conectar.php');
 	$conectar = new Conectar();
 	$id = $_POST['product'];
 	$sql = 'SELECT Produc_id,Descri_nomb ,Marca_nomb,Referenc_nomb,pcp.Cant_product
 			FROM Producto_kit pk
 			INNER JOIN Produc_cantidad_producto pcp ON pcp.id_product = pk.Produc_id  
 			INNER JOIN Produc_descripcion_ pd ON pd.Descri_id = pk.Produc_descr_id
 			INNER JOIN Produc_Marca pm ON pm.Marca_id = pk.Produc_marc_id
 			INNER JOIN Produc_Referencia pr ON pr.Referen_id = pk.Produc_referen_id 
 			WHERE pk.Produc_id = '.$id;
 	$datos = $conectar->consultas($sql);
 	if(isset($datos)){
 	 $valor['exito'] = "exito";
 	 $valor['id'] = $datos[0];
 	 $valor['product'] = $datos[1];
 	 $valor['marca'] = $datos[2];
 	 $valor['referencia'] = $datos[3];
 	 $valor['cantidad'] = $datos[4];
 	 echo json_encode($valor);
 	}else{
 		$valor["exito"] = "no_exito";
 		echo json_encode($valor);
 	}
 	unset($conectar);
 }

 if(isset($_POST['cantidad'],$_POST['codigo'])){
 	include_once('conectar.php');
 	$conectar = new Conectar();
 	$cant = $_POST['cantidad'];
 	$codigo = $_POST['codigo'];
 	$sql = 'UPDATE Produc_cantidad_producto 
 	 		SET Cant_product = Cant_product	+'.$cant.'
 	 		WHERE id_product = '.$codigo;
 	$update = $conectar->update_query($sql);
 	if(isset($update['exito'])){
 	  $valor["exito"] = "exito";
 	  echo json_encode($valor);
 	}else{
 	  $valor["exito"] = "no_exito";
 	  $valor["msg"] = $update['error'];
 	  echo json_encode($valor);
 	}
 	unset($conectar);
 }

 if(isset($_POST['cedula'])){
 	$ced = $_POST['cedula'];
 	include_once('conectar.php');
 	$conectar = new Conectar();
 	$sql = 'SELECT Usua_id,CONCAT(Usua_nomb," ",Usua_apelli),Usua_tel,Usua_cel,Usua_direc,email_user
 			FROM Clientes_kit_motos  
 			WHERE Usua_id = '.$ced;
 	$datos = $conectar->consultas($sql);
 	if(isset($datos)){
 		$valor["id"] = $datos[0];
 		$valor["nomb"] = $datos[1];
 		$valor["tel"] = $datos[2];
 		$valor["cel"] = $datos[3];
 		$valor["dir"] = $datos[4];
 		$valor["email"] = $datos[5];
		$valor["exito"] = "exito"; 
 		echo json_encode($valor);
 	}else{
 		$valor["exito"] = "no_exit";
 		echo json_encode($valor);
 	}
 	unset($datos);
 }	
 
?>