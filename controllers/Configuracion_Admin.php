<?php
include_once("conectar.php");
if(isset($_POST['id_fact'])){

}

if(isset($_POST['fact_sin_cancelar'])){
  $conectar = new Conectar();
  $sql = 'SELECT Id_factura,id_client,Fact_fecha,Total 
  		  FROM kit_facturacion 
  		  WHERE Fact_cancel = "NO"';
  $data = $conectar->consultas($sql);
  echo json_encode($data);
}


?>