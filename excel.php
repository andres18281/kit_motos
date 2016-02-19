<?php
require_once "excel/Classes/PHPExcel.php";
require_once "excel/Classes/PHPExcel/IOFactory.php";
include_once "controllers/conectar.php";
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 6000);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" enctype='multipart/form-data'>

  <input type="submit" name="enviar" value="enviar">
 </form>
  <?php
  
 
 // if(isset($_POST['enviar'])){
  	
  	
    $conecta = new Conectar();
   	
       $inputFileName = 'LISTA_ENERO_2016.xls';
       //$objPHPExcel->createSheet()
       $objPhpExcel_load = new PHPExcel();
       $objPhpExcel_load = PHPExcel_IOFactory::load($inputFileName);
       $objWorksheet = $objPhpExcel_load->getActiveSheet(0); 
	  
    for($i= 2;$i <= 979;$i++){
      $var = $objWorksheet->getCellByColumnAndRow(0, $i)->getValue();
     if($var != ""){
      echo " - ".$i." - ";
      $codigo = trim($objWorksheet->getCellByColumnAndRow(0, $i)->getValue());  
      $descrip = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(1, $i)->getValue())); 
      $marca = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(2, $i)->getValue()));   
      $refer = utf8_encode(trim($objWorksheet->getCellByColumnAndRow(3, $i)->getValue()));
      $precio = $objWorksheet->getCellByColumnAndRow(4, $i)->getValue();
      
  	  $respon1 = $conecta->Insertar_descripcion($descrip);

  	  if(isset($respon1['last_cod_id'])){
  	  	$codi_desc= $respon1['last_cod_id'];
  	  }else {
  	  	$select_desc = 'SELECT Descri_id FROM produc_descripcion_ WHERE Descri_nomb = "'.$descrip.'"';
  	  	$busc1 = $conecta->consultas($select_desc);
  	  	$codi_desc = $busc1["Descri_id"];
  	  	//var_dump($codi_desc);
  	  	//echo "  descuen ".$codi_desc." ";
  	  }
  	  
  	  $respon2 = $conecta->Insertar_marca($marca);
  	  if(isset($respon2['last_cod_id'])){
  	   $codi_marc = $respon2['last_cod_id'];	
  	  }else{
  	  	$select_marc = 'SELECT Marca_id FROM produc_marca WHERE Marca_nomb = "'.$marca.'"';
  	  	$busc2 = $conecta->consultas($select_marc);
  	  	$codi_marc = $busc2["Marca_id"];
  	  	//var_dump($codi_marc);
  	  	//echo "  marca ".$codi_desc." ";
  	  }
	  
	  $respon3 = $conecta->Insertar_referencia($refer);
  	  if(isset($respon3['last_cod_id'])){
  	  	$codi_refe = $respon3['last_cod_id'];
  	  }else{
  	  	$select_refe = 'SELECT Referen_id FROM produc_referencia WHERE Referenc_nomb = "'.$refer.'"';
  	  	$busc3 = $conecta->consultas($select_refe);
  	  	$codi_refe = $busc3["Referen_id"];
  	  	//var_dump($codi_refe);
  	    //echo " referen ".$codi_refe." ";
  	  }

  	  $insert_final = $conecta->Insertar_producto($codigo,$codi_desc,$codi_marc,$codi_refe,"",$precio);
  	  print_r($insert_final);
    }
   	
 // }
}
  ?>
</body>
</html>