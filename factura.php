<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src ="https://code.jquery.com/jquery-2.2.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style type="text/css">
    #login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}


  </style>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">				 
		  
		</div>		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <?php
    
        if(isset($_SESSION['perfil']) and $_SESSION['perfil'] == "asdqweasd5654184"){ //cliente ?>
          <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil<strong class="caret"></strong></a>
            <ul id="login-dp" class="dropdown-menu">
              <li><a href="#">Mi Perfil</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Salir</a></li>
            </ul>
           </li>
          </ul>
      <?php    
        }else{  ?> 
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil<strong class="caret"></strong></a>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      Acceso
                      <div class="social-buttons">
                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                      </div>
                                or
                      
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Usuario</label>
                          <input type="text" class="form-control" id="email_count" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                          <input type="password" class="form-control" id="password_count" placeholder="Password" required>
                          <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                        </div>
                        <div class="form-group">
                          <button id="btn_login" class="btn btn-primary btn-block">Loguear</button>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"> keep me logged-in</label>
                        </div>
                      
                    </div>
                    <div class="bottom text-center">
                      New here ? <a href="#"><b>Join Us</b></a> 
                    </div>
                  </div>
                </li>
              </ul>
           </li>
          </ul>
        <?php
       }
        ?>
		</div><!--colaso-->		
	   </nav>
  <div class="container">
    
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody id="table_item">
                </tbody>   
                <tbody>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong id="id_total"></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                          <a href="index.php" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando
                          </a>
                        </td>
                        <td>
                        <a  href="proceso.php" class="btn btn-success">
                            Comprar <span class="glyphicon glyphicon-play"></span>
                        </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
</body>
</html>

<script>
$(function(){
  $("#btn_close").click(function(){
  	window.location.reload();
  });

 setTimeout(function(){
    $.ajax({
       dataType:"json",
       type:"post",
       url:"controllers/enlista_producto.php",
       data:{"compras":"all"}
     }).done(function(data){
       var total = 0;
       var cant = data.length;
        $.each(data,function(key,value){
         total = total + parseInt(value.precio);
        
         var tr = '<tr>\
              <td class="col-sm-8 col-md-6" id="tr_'+value.id+'">\
                <div class="media">\
                  <div class="media-body">\
                    <h4 class="media-heading"><a href="#">'+value.descrip+'</a></h4>\
                    <h5 class="media-heading"> Id producto <a href="#">'+value.id+'</a></h5>\
                    <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>\
                  </div>\
                </div>\
              </td>\
              <td class="col-sm-1 col-md-1" style="text-align: center">\
	            <input type="email" class="form-control" id="exampleInputEmail1" value="3">\
              </td>\
              <td class="col-sm-1 col-md-1 text-center"><strong>'+value.precio+'</strong></td>\
              <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>\
              <td class="col-sm-1 col-md-1">\
                <button type="button" class="btn btn-danger">\
                 <span class="glyphicon glyphicon-remove" class="id_produc_delete" id="'+value.id+'"></span> Eliminar</button>\
              </td>\
            </tr>';
         $(tr).appendTo($("#table_item"));
        });
        $("#id_total").text("$"+total);
     });
 },0);

}); 
 $(document).on('click','.id_produc_delete',function(){
 	var id = $(this).attr('id');
 	$.ajax({
 	 dataType:"json",
 	 type:"post",
 	 data:{"id_produc_delete":id},
 	 url:"controllers/enlista_producto.php"
 	}).done(function(data){
 	  if(data.exito == "exito"){
 	  	$('#tr_'+id).toggle("slow");
 	  }else{
 	  	$("#myModal").modal('show');
 	  }
 	});
 });
</script>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informacion</h4>
      </div>
      <div class="modal-body">
        <p> No se ha podido eliminar el articulo, por favor vuelva a intentarlo</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_close">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/login.js"></script>