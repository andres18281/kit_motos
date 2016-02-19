<?php

include_once('conectar.php');
if(isset($_POST['inp_prod'],$_POST['slt_marca'],$_POST['std_referen'],$_POST['inp_prec'],$_POST['inp_cant'],$_POST['inp_desc_prod'])){
    $conectar = new Conectar();
 	$id = $_POST['inp_prod'];
 	$marca = $_POST['slt_marca'];
 	$refe = $_POST['std_referen'];
 	$preci = $_POST['inp_prec'];
 	$canti = $_POST['inp_cant'];
 	$descrip = $_POST['inp_desc_prod'];
 	$linea = $_POST['stl_linea'];
	$last_id_descrip =$conectar->Insertar_descripcion($descrip);
	$last_id_canti = $conectar->Insertar_cantidad($canti);
	$conectar->Insertar_precio($id,$preci);
	$exito = $conectar->Insertar_producto($id,$last_id_descrip['last_cod_id'],$marca,$refe,$linea);//
  	if(isset($exito['exito'])){
  	
  	}else{
  	
  	
  	}
}
?>