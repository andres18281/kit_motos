<?php
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




?>