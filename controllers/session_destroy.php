<<<<<<< HEAD
<?php
	if(!isset($_SESSION)){ 
          session_start(); 
    }
	if(isset($_POST['session']) and $_POST['session'] == "destroy"){
		isset($_SESSION['perfil']));
		isset($_SESSION['id_mail']));
		isset($_SESSION['id_usuario']));
		echo "salir";
	}

=======
<?php
	if(!isset($_SESSION)){ 
          session_start(); 
        }
	if(isset($_POST['session']) and $_POST['session'] == "destroy"){
		session_destroy();
	}

>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
?>