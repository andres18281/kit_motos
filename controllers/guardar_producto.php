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
	  $last_id_descrip = $conectar->Insertar_descripcion($descrip);
    $conectar->Insertar_precio($id,$preci);
    $exito = $conectar->Insertar_producto($id,$last_id_descrip['last_cod_id'],$marca,$refe,"null",$preci);//
    $last_id_canti = $conectar->Insertar_cantidad($id,$canti);
    if(isset($exito['exito'])){
     echo json_encode($exito);
    }
  }
 // actualiza producto
include_once('../models/Productos.php');
if(isset($_POST['nombre'],$_POST['codigo'],$_POST['cost'],$_POST['cant'],$_POST['refe'],$_POST['marc'])){
  $producto = new Productos();
  $nomb = $_POST['nombre'];
  $codi = $_POST['codigo'];
  $cost = $_POST['cost'];
  $cant = $_POST['cant'];
  $refe = $_POST['refe'];
  $marc = $_POST['marc'];
  $data = $producto->update_producto($codi,$nomb,$cost,$cant,$refe,$marc);
  echo json_encode($data);
}

?>