<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">

	<title></title>
  <style type="text/css">
   #id_total{
    font-weight: bold;
    font-size:12px;
    color: white;
   }
   #divShoppingCar {
    border-radius: 10px;
    border-width: 0;
    height: 37px;
    width: 220px;
   }
   #divTotalsShoppingCar a {
    color: #fff;
    margin: 0;
    padding: 0;
    text-decoration: none;
   }
   .box {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
   }
   .dark-gray {
    background-color: #666;
    background-image: -moz-linear-gradient(top,#666,#999);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#666),to(#999));
    background-image: -o-linear-gradient(top,#666,#999);
    background-image: linear-gradient(to top,#666,#999);
    background-repeat: repeat-x;
    border: 1px solid #555;
   }
   .pull-left {
     float: left;
   }
   .button {
    border-radius: 10px;
    color: #fff;
    display: inline-block;
    font-size: 1em;
    font-weight: bold;
    height: 26px;
    line-height: 1.8em;
    padding: 3px 8px 4px;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.25);
  }
  .orange {
    background-color: #e66500;
    background-image: -moz-linear-gradient(top,#e66500,#ff9400);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#e66500),to(#ff9400));
    background-image: -o-linear-gradient(top,#e66500,#ff9400);
    background-image: linear-gradient(to top,#e66500,#ff9400);
    background-repeat: repeat-x;
    border: 1px solid #e66500;
    height: 100%;
  }
  #divTotalsShoppingCar span {
    display: block;
    font-size: .9em;
    line-height: 1.2em;
    margin: 0;
    padding: 0;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.45);
  }
  #divTotalsShoppingCar {

    margin: 3px 1px;
    float: left;
    height: 30px;
    text-align: center;
    width: 108px;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.45)
}
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
  <div class="container-fluid">


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
  </div>
 <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="row" style="margin-bottom:20px;margin-top:50px;">
          <div class="col-md-2"></div>
		      <div class="col-md-6">
		        <input type="text" class="input-lg form-control" id="inp_searh" placeholder="Buscar">
		      </div>
		      <div class="col-md-2">
		  	   <button class="btn btn-default btn-lg" id="btn_search">
				    <span class="glyphicon glyphicon-search"></span>
		   	   </button>
		      </div>
  	  	</div>
      	<div class="row">
          <div class="col-md-3 col-md-offset-9">
            <div id="divShoppingCar" class="box pull-left dark-gray">
               <a href="factura.php" class="pull-left box button orange" id="aViewShoppingCart" title="Comprar"> <i class="glyphicon glyphicon-shopping-cart"></i>Comprar</a>
                <div id="divTotalsShoppingCar" class="box pull-left">
               <a href="#"> <span id="lblNumberItems">0</span> <span class="lblTotal">$0</span></a>
              </div>
            </div>
          </div>  
        </div>
        <div class="panel panel-default">
  		    <div class="panel-heading">PRODUCTOS</div>
  		    
  		 	  <div class="panel-body">
  		  	  <table class="table table-border table-striped">
  		   		  <thead>
  		     	    <tr>
 			   		     <td><b>Codigo</b></td>
 			   		     <td><b>Descripcion</b></td>
 			   		     <td><b>Marca</b></td>
 			   		     <td><b>Referencia</b></td>
 			   		     <td><b>Costo</b></td>
 			   		     <td></td>
  		     		 </tr>
           		</thead>
           		<tbody id="tbody_">
           		</tbody>
          	</table>
  		 	  </div>
		    </div>
   	  </div>
   	  <div class="col-md-4" style="margin-top:10%;position:absolute;overflow:hidden;display:none;" id="pnl_listado">
     	  <div class="panel panel-danger">
      	  <div class="panel-heading">
      			Listado
      	  </div>
      	  <div class="panel-body" id="listado_produc">
      	   <table class="table table-border table-striped">
      	   	 <thead>
      	   	  <tr>
      	   	  	<td><label> Codigo </label></td>
      	   	  	<td><label> Nombre</label> </td>
      	   	  	<td><label> Precio</label> </td>
                <td></td>
      	   	  </tr>
      	   	 </thead>
      	   	 <tbody id="body_compra"></tbody>
      	   </table>
      	   <div class="col-xs-6">Total</div>
      	   <div class="col-xs-6 lblTotal"></div>
      	  </div>
     	  </div>
      </div>	
    </div><!--row-->
 </div><!--container-fluid-->
</body>
</html>

<script src ="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
 $(function(){
 	$("#inp_searh").keypress(function(e){
 	  if(event.which == 13){
 	  	$("#tbody_").html("");
 	  	var valor = $(this).val();
 	  	$.ajax({
 	  		datetype:"json",
 	  		type:"post",
 	  		data:{"consult_product":valor},
 	  		url:"controllers/mostrar_productos.php",
 	  		success:function(data){
 	  		 var data = $.parseJSON(data);
 	  		  $.each(data,function(key,value){
 	  		   var tbo = '<tr>\
 	  		 	  		   <td>'+value.Produc_id+'</td>\
 	  		 			   <td>'+value.Descri_nomb+'</td>\
 	  		 			   <td>'+value.Marca_nomb+'</td>\
 	  		 			   <td>'+value.Referenc_nomb+'</td>\
 	  		 			   <td>'+value.Precio+'</td>\
 	  		 			   <td><a href="#" id='+value.Produc_id+' class="btn_buy btn btn-success btn-xs glyphicon glyphicon-shopping-cart"></a></td>\
 	  		 		      </tr>';
 	  		    $(tbo).appendTo($("#tbody_"));
 	  		  });  	
 	  		}
 	  	});
 	  }
 	});

   $("#lblNumberItems").click(function(){
     $("#pnl_listado").toggle( "slow");
   });

 	$("#btn_search").click(function(){
 		var valor = $("#inp_searh").val();
 		$("#tbody_").html("");
 		$.ajax({
 	  		datetype:"json",
 	  		type:"post",
 	  		data:{"consult_product":valor},
 	  		url:"controllers/mostrar_productos.php",
 	  		success:function(data){
 	  		 var data = $.parseJSON(data);
 	  		  $.each(data,function(key,value){
 	  		   var tbo = '<tr>\
 	  		 	  		   <td>'+value.Produc_id+'</td>\
 	  		 			   <td>'+value.Descri_nomb+'</td>\
 	  		 			   <td>'+value.Marca_nomb+'</td>\
 	  		 			   <td>'+value.Referenc_nomb+'</td>\
 	  		 			   <td>'+value.Precio+'</td>\
 	  		 			   <td><a href="#" id='+value.Produc_id+' class="btn_buy btn btn-success btn-xs glyphicon glyphicon-shopping-cart"></a></td>\
 	  		 		      </tr>';
 	  		    $(tbo).appendTo($("#tbody_"));
 	  		  });
 	  		}
 	  	});
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
                    <td>'+value.id+'</td>\
                    <td>'+value.descrip+'</td>\
                    <td>'+value.precio+'</td>\
                     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button id='+value.id+' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
                  </td>'; 
         $("#body_compra").append(tr);
       });
       $(".lblTotal").text("$"+total);
       $("#lblNumberItems").text(cant);
     });
  },0);

   $(document).on("click",".btn_buy",function(){
   	// $("#listado_produc").html("");
   	 var id = $(this).attr('id');
   	 $.ajax({
   	   dataType:"json",
   	   type:"post",
   	   url:"controllers/enlista_producto.php",
   	   data:{"id_producto":id}
   	 }).done(function(data){
       var total = 0;
       var cant = data.length;
       $.each(data,function(key,value){
         total = total + parseInt(value.precio);
         var tr = '<tr>\
                    <td>'+value.id+'</td>\
                    <td>'+value.descrip+'</td>\
                    <td>'+value.precio+'</td>\
                     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button id='+value.id+' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
                  </td>'; 
         $("#body_compra").append(tr);
       });
       $(".lblTotal").text("$"+total);
       $("#lblNumberItems").text(cant);
   	 });
   });
    
 });
 

</script>
<script type="text/javascript" src="js/login.js"></script>
