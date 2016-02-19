
<?php
 include_once "../models/Cliente.php";
 include_once "login.php";
 if(isset($_POST['ced'],$_POST['nomb'],$_POST['apelli'],$_POST['email'])){
 	$cliente = new Cliente();
 	$cel = $_POST['ced'];
 	$nomb = $_POST['nomb'];
 	$apelli = $_POST['apelli'];
 	$email = $_POST['email'];
 	if(isset($_POST['tel'])){ 
 	  $tel = $_POST['tel'];
 	}else{
 	  $tel = 0;
 	}
 	if(isset($_POST['cel'])){ 
 	  $cel = $_POST['cel'];
 	}else{
 	  $cel = 0;
 	}
 	if(isset($_POST['dir'])){
 	  $dir = $_POST['dir'];
 	}else{
 	  $dir = "null";
 	}
 	$data = $cliente->Add_cliente($cel,$nomb,$apelli,$tel,$cel,$dir,$email);
 	echo json_encode($data);
 }

 if(isset($_POST['count'],$_POST['pass'])){
 	$cliente = new Cliente();
 	$user = $_POST['count'];
 	$pass = $_POST['pass'];
 	$login = new Login($user,$pass);
 	$verifica = $login->loguearse();
 	if($verifica){
 	  $dat['data'] = true;
 	}else{
 	  $dat['data'] = false;	
 	}
 	echo json_encode($dat);
 }

?>