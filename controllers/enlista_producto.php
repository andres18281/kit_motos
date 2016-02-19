<?php 
session_start();
 include_once "conectar.php";
 error_reporting(true);
 
 if(isset($_REQUEST['id_producto'])){
    $conect = new Conectar();
    $id = $_REQUEST['id_producto'];
    $sql = 'SELECT 	Produc_id,Precio,Descri_nomb
    		FROM producto_kit pro_kit 
    		INNER JOIN produc_descripcion_ prod ON pro_kit.Produc_descr_id = prod.Descri_id
    		WHERE Produc_id = "'.$id.'"';
    $respon = $conect->consultas($sql);
    if(isset($respon)){
      //echo $respon['Produc_id'];
    	$_SESSION['produc_var_session_'][] = Array("id"=>$respon['Produc_id'],"descrip"=>$respon['Descri_nomb'],"precio"=>$respon['Precio']);
      //echo json_encode($respon);
    }
    echo json_encode($_SESSION['produc_var_session_']);
}


if(isset($_REQUEST['compras'])){
    $conect = new Conectar();
    if(isset($_SESSION['produc_var_session_'])){
      echo json_encode($_SESSION['produc_var_session_']);
    }
}
/*
if(isset($_REQUEST['id_produc_delete'])){
  $id = $_POST['id_produc_delete']
  $key = array_search($id, array_column($_SESSION['produc_var_session_'], 'id'));
  unset($_SESSION['produc_var_session_'][$key]);
  if(isset($_SESSION['produc_var_session_'][$key])){
    $exito['exito'] = "exito";
  }else{
    $exito['exito'] = "no_exito";
  }
}*/







//https://www.microsoft.com/es-es/server-cloud/products/sql-server-editions/sql-server-business-intelligence.aspx
//http://blog.meridadesign.com/guia-de-inicio-con-angular-2/
?>