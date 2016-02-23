<?php
<<<<<<< HEAD
 include_once('conectar.php');
 include_once('../models/Productos.php');
 $conectar = new Conectar();
 if(isset($_REQUEST['id_fact'])){
   $id = $_REQUEST['id_fact'];
   $sql = 'SELECT Id_factura,Fact_fecha,Fact_cancel,Total,kit.id_client,Usua_nomb,Usua_apelli,Usua_tel,Usua_direc,email_user	
   		   FROM kit_facturacion kit	
   		   INNER JOIN clientes_kit_motos clien ON clien.Usua_id = kit.id_client
   		   WHERE Id_factura = '.$id;
   $respon = $conectar->consultas($sql);
   if(isset($respon)){
   	  $data1 = Array("id"=>$respon['Id_factura'],
   	 	   			 "fecha"=>$respon['Fact_fecha'],
   	 	   			 "cancela"=>$respon['Fact_cancel'],
   	 	   			 "total"=>$respon['Total'],
   	 	   			 "id_cli"=>$respon['id_client'],
   	 	   			 "nomb"=>$respon['Usua_nomb'],
   	 	   			 "apelli"=>$respon['Usua_apelli'],
   	 	   			 "tel"=>$respon['Usua_tel'],
   	 	   			 "dir"=>$respon['Usua_direc'],
   	 	   			 "mail"=>$respon['email_user']);
   	  $data['factura'] = $data1;
   }
   $detal = 'SELECT cod_produc,cantidad,Costo 
   			 FROM descripcion_factura
   			 WHERE id_solicitud = '.$id;
   $respon2 = $conectar->consultas($detal);
   if(isset($respon2)){
   	 $array_detall = Array();
   	 if(is_array($respon2)){
   	   foreach($respon2 as $val){
   	   	 $dat = Array("id"=>$val['cod_produc'],
   	   	 	   		  "cant"=>$val['cantidad'],
   	   	 	   		  "cost"=>$val['Costo']);
   	   	 array_push($array_detall,$dat);
   	   }
   	 }else{
   	 	$array_detall = Array("id"=>$respon2['cod_produc'],
   	   	 	   				  "cant"=>$respon2['cantidad'],
   	   	 	   				  "cost"=>$respon2['Costo']);
   	 }
   	 $data['detalles'] = $array_detall;		 
   }
   echo json_encode($data);
 }


 if(isset($_POST['marca'])){
 	$product = new Productos();
 	$data = $product->Get_Marca();
 	if(isset($data)){
 	 if(is_array($data[0])){
 	    foreach($data as $val){	
 	  	  $respon['marca'][] = Array('id'=>$val['Marca_id'],"marca"=>$val['Marca_nomb']); 	
 	 	}
 	 }else{
 	 	$respon['marca'] = Array('id'=>$data['Marca_id'],"marca"=>$data['Marca_nomb']);
 	 }
 	  echo json_encode($respon);
 	}
 }
if(isset($_POST['referen'])){
 	$product = new Productos();
 	$data = $product->Get_referencia();
 	if(isset($data)){
 	  if(is_array($data[0])){
 	  	foreach($data as $val){
 	  	  $respon['referen'][] = Array('id'=>$val['Referen_id'],"marca"=>$val['Referenc_nomb']); 	
 	  	}
 	  }else{
 	  	 $respon['referen'] = Array('id'=>$data['Referen_id'],"marca"=>$data['Referenc_nomb']); 
 	  }
 	  echo json_encode($respon);
 	}
 }
 
 //print_r($data);
=======
 include_once('consultas.php');


 if(isset($_POST['id'],$_POST['marc'],$_POST['refer'],$_POST['prec'],$_POST['cant'],$_POST['desc_produc'])){
 	$consult = new Consultas();
 	if($_POST['marca'] == "si"){
 		
 	}
 }

 



>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
?>