
<?php
header("content-type: application/javascript");
if(!isset($_SESSION)) {
        session_start(); 
    }
    if(isset($_GET["salir"]) and $_GET["salir"] == "ok"){   
       session_destroy();          
    }

    
?>

