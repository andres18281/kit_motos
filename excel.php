<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" enctype='multipart/form-data'>
  <input type="FILE" name="archivo">
  <input type="submit" name="enviar" value="enviar">
 </form>
  <?php
  
 
  if(isset($_POST['enviar'])){
  	require_once "excel/Classes/PHPExcel.php";
require_once "excel/Classes/PHPExcel/IOFactory.php";
include_once "controllers/conectar.php";
  	
    $conecta = new Conectar();
   	
       $inputFileName = 'LISTA_ENERO_2016.xlsx';
       //$objPHPExcel->createSheet()
       $objPhpExcel_load = new PHPExcel();
       $objPhpExcel_load = PHPExcel_IOFactory::load($inputFileName);
       $objWorksheet = $objPhpExcel_load->getActiveSheet(0); 
	  
    for($i= 1;$i <= 795;$i++){
      echo " - ".$i." - ";
      $codigo = trim($objWorksheet->getCellByColumnAndRow(0, $i)->getValue());  
      $descrip = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(1, $i)->getValue())); 
      $marca = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(2, $i)->getValue()));   
      $refer = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(3, $i)->getValue()));
      $precio = trim($objWorksheet->getCellByColumnAndRow(4, $i)->getValue());
      
      
      $insert_desc = array('Descri_nomb'=>$descrip);
      $insert_marc = array('Marca_nomb'=>$marca);
      $insert_refe = array('Referenc_nomb'=>$refer);
  	  
  	  $respon1 = $conecta->inserta('produc_descripcion_',$insert_desc);
  	  if(isset($respon1)){
  	  	$codi_desc= $respon1['last_cod_id'];
  	  }else{
  	  	$select_desc = 'SELECT Descri_id FROM produc_descripcion_ WHERE Descri_nomb = "%'.$descrip.'%"';
  	  	$busc1 = $conecta->consultas($select_desc);
  	  	$codi_desc = $busc1[0];
  	  }
  	  
  	  $respon2 = $conecta->inserta('produc_marca',$insert_marc);
  	  if(isset($respon2)){
  	   $codi_marc = $respon2['last_cod_id'];	
  	  }else{
  	  	$select_marc = 'SELECT Marca_id FROM produc_marca WHERE Marca_nomb = "%'.$marca.'%"';
  	  	$busc2 = $conecta->consultas($select_marc);
  	  	$codi_marc = $busc2[0];
  	  }
	  
	  $respon3 = $conecta->inserta('produc_referencia',$insert_refe);
  	  if(isset($respon3)){
  	  	$codi_refe = $respon3['last_cod_id'];
  	  }else{
  	  	$select_refe = 'SELECT Referen_id FROM produc_referencia WHERE Referenc_nomb = "%'.$refer.'%"';
  	  	$busc3 = $conecta->consultas($select_refe);
  	  	$codi_refe = $busc3[0];
  	  }

  	  $insert = Array('Produc_id'=>$codigo,
  	  				  'Produc_descr_id'=>$codi_desc,
  	  				  'Produc_marc_id'=>$codi_marc,
  	  				  'Produc_referen_id'=>$codi_refe,
  	  				  'Tipo_id'=>null,
  	  				  'Precio'=>$precio);

  	  $insert_final = $conecta->inserta('producto_kit',$insert);
    
   	
  }
}
  ?>
</body>
</html>