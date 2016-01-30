<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
	

	<title></title>
</head>
<body>
 <div class="container-fluid">
  <div class="row">
	<div class="col-md-12">
	  <nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">				 
		  
		</div>		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
			     <li>
					<a href="#">Action</a>
				 </li>
				 <li>
					<a href="#">Another action</a>
				 </li>
				 <li>
					<a href="#">Something else here</a>
				 </li>
				 <li class="divider">
				 </li>
				 <li>
				    <a href="#">Separated link</a>
				 </li>
				</ul>
			</li>
		  </ul>
		</div><!--colaso-->		
	   </nav>
	 </div><!--col-md-12-->
   </div><!--row-->
   <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="row" style="margin-bottom:20px;margin-top:50px;">
             <div class="col-md-2">
             </div>
			 <div class="col-md-6">
			   <input type="text" class=" input-lg form-control" id="inp_searh" placeholder="Buscar">
			 </div>
			 <div class="col-md-2">
			   <button class="btn btn-default btn-lg" id="btn_search">
				<span class="glyphicon glyphicon-search"></span>
			   </button>
			 </div>
  		    </div>
      <div class="panel panel-default">
  		<div class="panel-heading">PRODUCTOS</div>
  		 <div class="panel-default" style="margin-top:20px;">
  		   <div class="col-md-12">
			<div class="col-md-4">
			 <label> NOMBRE DE MERCANCIA</label>
			</div>
			<div class="col-md-6">
			 <input type="text" class="form-control">
			</div>
			<div class="col-md-2">
    		  <a href="#" class="thumbnail">
      			<img src="..." alt="...">
    		  </a>
  			</div>
		   </div>
  		 </div>
  		 <div class="panel-body">
  		  <table class="table">
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
   	</div><!--col-md-10-->
    <div class="col-md-1">
    </div>
   </div><!--row-->
   <div class="col-md-12">

   </div>
 </div><!--container-fluid-->
</body>
</html>
<script src ="jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
 $(function(){
 	$("#inp_searh").keypress(function(e){
 	  if(event.which == 13){
 	  	event.preventDefault();
 	  	var valor = $(this).val();
 	  	$.ajax({
 	  		datetype:"html",
 	  		type:"post",
 	  		data:{"consult_product":valor},
 	  		url:"controllers/mostrar_productos.php",
 	  		success:function(data){
 	  		    $("#tbody_").html(data);
 	  		}
 	  	});
 	  }
 	});

 	$("#btn_search").click(function(){
 		$.ajax({
 	  		datetype:"html",
 	  		type:"post",
 	  		data:{"consult_product":valor},
 	  		url:"controllers/mostrar_productos.php",
 	  		success:function(data){
 	  			var v = '<tr> '+data+'</tr>';
 	  		    $("#tbody_").append(data);
 	  		}
 	  	});
 	});
 });
</script>