<?php
session_start();
$_SESSION['nomas'][0] = array("p"=>"1212","q"=>"232323");
$_SESSION['nomas'][1] = array("p"=>"12ddddd12","q"=>"23fffffff2323");
unset($_SESSION['nomas'][1]);
if(isset($_SESSION['nomas'][1])){
 echo "existe".'<br>';
}else{
	echo "no existe".'<br>';
}
echo $_SESSION['nomas'][1];
?>