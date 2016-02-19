<?php
ob_start();
session_start(); 
include_once 'controllers/login.php'; 
if(isset($_SESSION)){ 
  if(isset($_SESSION,$_SESSION["perfil"]) and $_SESSION["perfil"] == "qwqwsa123423@!"){ // de operaciones
    header("location: view/ingresar_productos.php");
  }elseif(isset($_SESSION,$_SESSION["perfil"]) and $_SESSION["perfil"] == "asdqweasd5654184"){ // clientes
    header("location: index.php");
  }
} 
if(isset($_GET['com'])){
  $pro = $_GET['com'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src ="https://code.jquery.com/jquery-2.2.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


  <style type="text/css">

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
  form[role=login] img {
    display: block;
    margin: 0 auto;
    margin-bottom: 35px;
  }
  form[role=login] input,
  form[role=login] button {
    font-size: 18px;
    margin: 16px 0;
  }
  form[role=login] > div {
    text-align: center;
  }
  
.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
  .form-links a {
    color: #fff;
  }



  </style>
</head>

 <body>

<div class="container-fluid">
    <div id="login-overlay" class="col-md-6 col-md-offset-6" style="margin-top:100px;">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Loguear a  <b>TiendaVirtual.com</b></h4>Regresar <a href="index.php">Pagina principal</a>.
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 col-lg-6">
                      <div class="well">
                          <form id="loginForm" method="POST">
                              <div class="form-group">
                                  <label for="username" class="control-label">usuario</label>
                                  <input type="text" class="form-control" name="username" value="" required="" title="Please enter your username" placeholder="Correo o cedula">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Contraseña</label>
                                  <input type="password" class="form-control" name="password" placeholder="Contraseña" value="" required="" title="Please enter your password" >
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Recordar Contraseña
                                  </label>
                              </div>
                              <button type="submit" value="login" name="submit" class="btn btn-success btn-block">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <p class="lead">Registrese, es  <span class="text-success">Gratis</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Realizar Compras</li>
                          <li><span class="fa fa-check text-success"></span> Hacer preguntas</li>
                          <li><span class="fa fa-check text-success"></span> Compartir productos</li>
                          <li><span class="fa fa-check text-success"></span> Guardar a favoritos</li>
                         
                      </ul>
                      <p><a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Si, deseo registrarme</a></p>
                  </div>
              </div>
          </div>
      </div>

  </div>
<
<script type="text/javascript">

</script>

</body>
</html>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro</h4>
      </div>
      <div class="modal-body">
        
        <div class="row" id="pwd-container">
    <div class="col-md-12"></div>
    
    <div class="col-md-12">
      <section class="login-form">
        
          <input type="number" id="inp_cc" placeholder="Cedula" required class="form-control input-md">
          <input type="text" id="inp_nomb" placeholder="Nombre" required class="form-control input-md">
          <input type="text" id="inp_app" placeholder="Apellidos" required class="form-control input-md">
           <input type="text" id="inp_tel" placeholder="Telefono" required class="form-control input-md">
           <input type="text" id="inp_cel" placeholder="Celular" required class="form-control input-md">
           <input type="email" id="inp_ema" placeholder="Email" required class="form-control input-md"/>
           <input type="hidden" name="redirect" value="<?php echo $pro = isset($pro) ? $pro : 0; ?>"/> 
          <input type="password" id="inp_pass" class="form-control input-md" id="password" placeholder="Password" required="" />
          <input type="password" id="inp_pass_con" class="form-control input-md" id="password" placeholder="COnfirmacion" required="" />
          <div class="pwstrength_viewport_progress"></div>
          <button id="register" name="go" class="btn btn-md btn-primary btn-block">Registrar</button>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $(function(){
    $("#register").click(function(){
     var cc = $("#inp_cc").val();  
     var nomb = $("inp_nomb").val();  
     var apell = $("inp_app").val();  
     var tel = $("inp_tel").val(); 
     var cel = $("inp_cel").val();  
     var mail = $("inp_ema").val();  
     var pass = $("inp_pass").val();  
     var pass_con = $("inp_pass_con").val();
     var data = new FormData();
     data.append('id',cc);
     data.append('nombre',nomb);
     data.append('apelli',apell);
     data.append('tel',tel);
     data.append('cel',cel);
     data.append('email',mail);
     data.append('pass',pass);
     data.append('pass1',pass_con);
      $.ajax({
        dataType:"json",  
        contentType: false,
        processData: false,                                      
        type:"post",
        url:"controllers/Clientes_Controller.php",
        data:data,
        success:function(data){
          if(data.exito != ""){
            alert(data.exito);
          }
        }
      });
    });
  });
</script>
<?php
  if(isset($_POST['btn_enviar'])){
    if(isset($_POST['users_id'],$_POST['password'])){
      $pass = $_POST['password'];
      $login = new Login($_POST['users_id'],sha1($pass));
      if($login->loguearse()){
        if($_POST['redirect'] == 1 and isset($_POST['redirect'])){
          header("location:proceso.php");
        }else{
          header("location: index.php");
        }
      }else{
        echo "no se conecta";
      }
    }
 }
ob_end_flush();
?>