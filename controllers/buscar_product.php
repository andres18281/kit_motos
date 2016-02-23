<?php

 if(isset($_POST['product'])){
 	include_once('conectar.php');
 	$conectar = new Conectar();
 	$id = $_POST['product'];
 	$sql = 'SELECT pk.Produc_id,pd.Descri_nomb ,pm.Marca_nomb,pr.Referenc_nomb,pcp.Cant_product,pk.Precio
 			FROM producto_kit pk
 			INNER JOIN produc_cantidad_producto pcp ON pcp.id_product = pk.Produc_id  
 			INNER JOIN produc_descripcion_ pd ON pd.Descri_id = pk.Produc_descr_id
 			INNER JOIN produc_marca pm ON pm.Marca_id = pk.Produc_marc_id
 			INNER JOIN produc_referencia pr ON pr.Referen_id = pk.Produc_referen_id 
 			WHERE pk.Produc_id = "'.$id.'"';
 	$datos = $conectar->consultas($sql);
 	if(isset($datos)){
 	 $valor['exito'] = "exito";
 	 $valor['id'] = $datos['Produc_id'];
 	 $valor['product'] = $datos['Descri_nomb'];
 	 $valor['marca'] = $datos['Marca_nomb'];
 	 $valor['referencia'] = $datos['Referenc_nomb'];
 	 $valor['cantidad'] = $datos['Cant_product'];
 	 $valor['precio'] = $datos['Precio'];
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

 include_once('conectar.php');
 if(isset($_POST['cedula'])){
 	$ced = $_POST['cedula']; 	
 	$conectar = new Conectar();
 	$sql = 'SELECT Usua_id,Usua_nomb,Usua_apelli,Usua_tel,Usua_cel,Usua_direc,email_user
 			FROM Clientes_kit_motos  
 			WHERE Usua_id = '.$ced;
 	$datos = $conectar->consultas($sql);
 	if(isset($datos)){
 		$valor["id"] = $datos['Usua_id'];
 		$valor["nomb"] = $datos['Usua_nomb']." ".$datos['Usua_apelli'];
 		$valor["tel"] = $datos['Usua_tel'];
 		$valor["cel"] = $datos['Usua_cel'];
 		$valor["dir"] = $datos['Usua_direc'];
 		$valor["email"] = $datos['email_user'];
		$valor["exito"] = "exito"; 
 		echo json_encode($valor);
 	}else{
 		$valor["exito"] = "no_exit";
 		echo json_encode($valor);
 	}
 	unset($datos);
 }


////////////////////////////////////////////

if(isset($_POST['']))	
 
?>