<<<<<<< HEAD
<?php 
session_start();
if(isset($_SESSION['perfil']) and $_SESSION['perfil'] != "qwqwsa123423@!"){
  header("location: ../index.php");
}
?>
=======
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/fileinput.css">-->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<<<<<<< HEAD

 <style type="text/css">
 	.invoice-title h2, .invoice-title h3 {
    	display: inline-block;
	}

	.table > tbody > tr > .no-line {
    	border-top: none;
	}

	.table > thead > tr > .no-line {
    	border-bottom: none;
	}

	.table > tbody > tr > .thick-line {
    	border-top: 2px solid;
	}

	.suggest-element{
 	  margin-left:5px;
	  margin-top:5px;
	  width:350px;
	  cursor:pointer;
    }
	#suggestions {
	  width:350px;
	  height:150px;
	  overflow: auto;
	}

 </style>
	
=======
	<?php
   
  	 include_once('../controllers/conectar.php');
  	 $sql = 'SELECT Marca_id,Marca_nomb
 			 FROM Produc_Marca';
 	 $sql2 = 'SELECT Referen_id,Referenc_nomb	
 	 		 FROM Produc_Referencia';
 	 $sql3 = 'SELECT Tip_pro_id,Tip_nomb
 	 		  FROM Produc_Tipo_producto';
 	 $consult = new Conectar();			
 	 $respon_marca = $consult->consultas($sql);
 	 $respon_referenc = $consult->consultas($sql2);
 	 
 	 $respon_produc = $consult->consultas($sql3);
 	 ?>

>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
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
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
		      <input type="text" class="form-control" >
			</div> 
			<button type="submit" class="btn btn-default">
			   Submit
			</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
			     <li>
					<a href="#">Agregar Producto</a>
				 </li>
				 <li>
					<a href="#">Agregar cantidad</a>
				 </li>
				 <li>
					<a href="#">Ver solicitud Compra</a>
				 </li>
				 <li class="divider">
				 </li>
				 <li>
				    <a href="#">Salir</a>
				 </li>
				</ul>
			</li>
		  </ul>
		</div><!--colaso-->		
	   </nav>
	 </div><!--col-md-12-->
   </div><!--row-->
   
   <div class="row">
	<div class="col-md-3">
	 <div class="container-fluid">
      <nav class="navbar navbar-default">
    	 <div class="navbar-header">
      	  <a class="navbar-brand" href="#">MENU</a>
    	 </div>
      	 <div>
      	  <ul class="nav navbar-nav">
           <div class="col-md-12 menu" >
            <a id="menu1" href="#">
             <li style="padding-top:13px;">Agregar nuevos productos</li>
            </a>
           </div>
           <div class="col-md-12 menu">
            <a id="menu2" href="#">
             <li style="padding-top:13px;">Agregar cantidad </li>
            </a>
           </div>
           <div class="col-md-12 menu">
            <a id="menu3" href="#">
            <li style="padding-top:13px;">Ver Facturaciones</li>
           </div>
           <div class="col-md-12 menu">
            <a id="menu4" href="#">
             <li style="padding-top:13px;">Buscar Cliente</li>
            </a>
      	   </div>
      	  </ul>
      	 </div>
	  </nav>
     </div>
    </div>
    <div class="col-md-8">
	 	<div id="add_product" style="display:none;">
<<<<<<< HEAD
=======
		<form method="POST" action="">
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
		 <div class="container-fluid">
		  <div class="panel panel-danger">
		   <div class="panel-heading">
			  AGREGAR PRODUCTO
		   </div>
		   <div class="panel-body">
			<div class="row form-group">
			 <div class="col-md-4">
<<<<<<< HEAD
=======
			  <label> Linea de Producto</label>
			 </div>	
			 <div class="col-md-8">
			  <select name="stl_linea" id="slt_linea" class="form-control">
				<?php
				  foreach($respon_produc as $linea){
				  	echo '<option value='.$linea[0].'>'.$linea[1].'</option>';
				  }
				?>
			  </select>
			 
			 </div>	
			</div>

			<div class="row form-group">
			 <div class="col-md-4">
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			  <label> Codigo de producto</label>
			 </div>	
			 <div class="col-md-8">
			  <input type="number" class="form-control"  name="inp_prod" id="inp_prod">
			 </div>	
			</div>

<<<<<<< HEAD
			<div class="row form-group"> 
=======
			<div class="row form-group">
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			 <div class="col-md-4">

			  <label> Seleccionar Marca</label>
			 </div>	
			 <div class="col-md-8">
			  <select class="form-control" name="slt_marca" id="slt_marca">
<<<<<<< HEAD
			   
=======
			   <?php	
				foreach($respon_marca as $value){
 				  echo '<option value="'.$value[0].'">'.$value[1].'</option>';
 				}
 			    ?>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			  </select>
			 </div>	
			</div>

			<div class="row form-group">
			 <div class="col-md-4">
			  <label> Seleccionar Referencia</label>
			 </div>	
			 <div class="col-md-8">
			  <select class="form-control" name="std_referen" id="std_referen">
<<<<<<< HEAD
				
=======
				<?php
				 foreach($respon_referenc as $refe){
				 	echo '<option value="'.$refe[0].'">'.$refe[1].'</option>';
				 }
				?>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			  </select>
			 </div>	
			</div>
		
			<div class="row form-group">
			 <div class="col-md-4">
			  <label> Precio</label>
			 </div>	
			 <div class="col-md-8">
			  <input type="number" class="form-control" name="inp_prec" id="inp_prec">
			 </div>	
			</div>			
			<div class="row form-group">
			 <div class="col-md-4">
			  <label> Cantidad</label>
			 </div>	
			 <div class="col-md-8">
			  <input type="number" class="form-control" name="inp_cant" id="inp_cant">
			 </div>	
			</div>

			<div class="row form-group">
			 <div class="col-md-4">
			  <label> Descripcion del Producto</label>
			 </div>	
			 <div class="col-md-8">
			  <input type="text" class="form-control" name="inp_desc_prod" id="inp_desc_prod">
			 </div>	
			</div>
		    <div class="row">
		  	  <div class="col-md-6">
				<button class="btn btn-block btn-default">Limpiar Campos</button>
		  	  </div>
		  	  <div class="col-md-6">
<<<<<<< HEAD
				<button class="btn btn-block btn-success" id="btn_save_prod" name="enviar"><span class="glyphicon glyphicon-floppy-disk"></span>  Guardar</button>
=======
				<button class="btn btn-block btn-success" id="btn_save" name="enviar" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>  Guardar</button>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
		  	  </div>
	 	 	</div>
		   </div>
		  </div>
		 </div>
<<<<<<< HEAD
	 	
=======
	 	</form>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
	 	</div><!--#agregar_producto-->

	 	<div id="agregar_canti" class="container-fluid" style="display:none;">
		 <div class="panel panel-success">
		  <div class="panel-heading">
<<<<<<< HEAD
			Abastecer cantidades de productos 
=======
			Abastecer cantidades de productos
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
		  </div>
		  <div class="panel-body">
			<div class="form-group">
			 <div class="row">
			   <div class="col-md-4">
				 <label>Codigo de producto</label>
			   </div>
<<<<<<< HEAD
			   <div class="col-md-6" style="overflow-x:scroll;height:200px">
				 <input type="text" class="form-control" id="inp_codigo">
				 <ul class="nav" id="sugerenc_prod"></ul>
			   </div>
			 </div>

=======
			   <div class="col-md-6">
				 <input type="text" class="form-control" id="inp_codigo">
			   </div>
			 </div>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			 
			 <div class="row" style="margin-top:50px;"> 
			  <div class="col-md-6">
				<button class="btn btn-default btn-block">Limpiar campos</button>
			  </div>
			  <div class="col-md-6">
<<<<<<< HEAD
				<button class="btn btn-success btn-block" id="btn_buscar_prod" data-toggle="modal" data-target="#myModal_modifi_cant"><span class="glyphicon glyphicon-search"></span></button>
=======
				<button class="btn btn-success btn-block" id="btn_buscar_prod"><span class="glyphicon glyphicon-search"></span></button>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
			  </div>
			 </div><!--/.row-->
		    </div><!--form-group-->
		  </div>
		 </div>
	 	</div><!--#agregar_canti-->

		<div id="ver_facturacion" class="container-fluid" style="display:none;">
		  <div class="row">
		    <div class="panel panel-danger">
		     <div class="panel-heading">
			   <b>SOLICITUDES DE FACTURACION</b>
		     </div>
		     <div class="panel-body">
		      <table id="example" class="display" cellspacing="0" width="100%">
        		<thead>
             	 <tr>
                   <th>Codigo Solicitud</th>
                   <th>Fecha</th>
                   <th>Cliente</th>
                   <th>Total</th>
                   <th></th>        
             	  </tr>
        		</thead> 
<<<<<<< HEAD
        		<tbody id="list_fact">
            	 
=======
        		<tbody>
            	  <tr>
                  	<td>Tiger Nixon</td>
                  	<td>System Architect</td>
                  	<td>Edinburgh</td>
                  	<td>61</td>
                  	<td>2011/04/25</td>
            	  </tr>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
        		</tbody>
    	   	  </table>
		  	 </div><!--panel-body-->
			</div><!--panel danger-->
		  </div><!--.row--> 
		</div><!--#facturacion-->

		<div id="busca_cliente" class="container-fluid" style="display:none;">
		 <div class="row">
		  <div class="panel panel-success">
			<div class="panel-heading">
			  BUSCAR CLIENTE
			</div>
			<div class="panel-body">
			 <div class="form-group">
			  <div class="row">
			   <div class="col-md-4">
				 <label> Cedula</label>
			   </div>
			   <div class="col-md-6">
				 <input type="text" id="inp_cedu" class="form-control">
			   </div>
			   <div class="col-md-12" style="margin-top:50px;">
				<table  class="table">
				 <thead>
				  <td> Cedula</td>
				  <td> Nombres</td>
				  <td> Telefono</td>
				  <td> Celular</td>
				  <td> Direccion</td>
				  <td> Email</td>
				 </thead>
				 <tbody>
				  <tr class="danger">
				   <td id="ced"> </td>
				   <td id="nom"> </td>
				   <td id="tel"> </td>
				   <td id="celu"> </td>
				   <td id="dir"> </td>
				   <td id="mail"> </td>
				 </tr> 
				 </tbody>
				</table>
			   </div><!--row-->
			  </div><!--row-->
			 </div><!--form-group-->
			 <div class="col-md-12">
			  <div class="col-md-5">
			  	<button class="btn btn-default btn-block" id="btn_clean">Limpiar Campos</button>
			  </div>
			  <div class="col-md-5">
			  	<button class="btn btn-success btn-block" id="btn_busc_clien">Buscar Cliente</button>
			  </div>
			 </div>
			</div>
		  </div><!-- panel-success-->
		 </div>
		</div>

    </div><!--col-md-7-->
    <div class="col-md-1">

    </div>
   </div><!--row-->
   <div class="col-md-12">
   </div>
 </div><!--container-fluid-->
</body>
</html>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Producto</h4>
      </div>
      <div class="modal-body">
        <table class="table">	
         <thead>
		  <tr>
			<th> ID</th> 
			<th> Referencia</th> 
			<th> Marca</th>
			<th>Descripcion</th>
			<th>Cantidad Actual</th>
			<th>Cantidad para agregar</th>
		  </tr>
         </thead>
		 <tbody id="body_table">
		   <th id="id_pr"></th> 
		   <th id="refe"> </th>
		   <th id="marc"> </th>
		   <th id="desc">Descripcion</th>
		   <th id="cant">Cantidad Actual</th>
		   <th><input type="number" id="imp_num_cant" class="form-control"></th>
		 </tbody>
	
        </table>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" id="btn_add_cant" data-dismiss="modal">Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src ="../jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../js/fileinput.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function(){
    $('#example').DataTable({
    	"sProcessing":     "Procesando...",
    	"sLengthMenu":     "Mostrar _MENU_ registros",
    	"sZeroRecords":    "No se encontraron resultados",
    	"sEmptyTable":     "Ningún dato disponible en esta tabla",
    	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    	"sInfoPostFix":    "",
    	"sSearch":         "Buscar:",
    	"sUrl":            "",
    	"sInfoThousands":  ",",
    	"sLoadingRecords": "Cargando...",
    	"oPaginate": {
        	"sFirst":    "Primero",
        	"sLast":     "Último",
        	"sNext":     "Siguiente",
        	"sPrevious": "Anterior"
    	},
    	"oAria": {
        	"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        	"sSortDescending": ": Activar para ordenar la columna de manera descendente"
    	}

    });
<<<<<<< HEAD
    $("#menu3").click(function(){
    	$.ajax({
    	  dataType:"json",
    	  type:"post",
    	  url:"../controllers/Configuracion_Admin.php",
    	  data:{"fact_sin_cancelar":"all"},
    	  success:function(data){
    	  	 $("#list_fact").html("");
    	  	  $.each(data,function(key,value){
    	  	   console.log(value.Fact_fecha);	
    	  	   	var t = '<tr>\
    	  					 <td>'+value.Id_factura+'</td>\
    	  					 <td>'+value.Fact_fecha+'</td>\
    	  					 <td>'+value.id_client+'</td>\
    	  			 	 	 <td>'+value.Total+'</td>\
    	  			 	 	 <td><a href="#" class="ver_fact btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal_fact" id='+value.Id_factura+'><span class="glyphicon glyphicon-zoom-in"></span></a></td>\
    	  			     </td>';
    	  		$(t).appendTo($("#list_fact"));
    	  	  });
    	  }
    	});
    });

    	
    $("#menu1").click(function(){
    	$("#add_product").slideToggle();
    	$.ajax({
    	  dataType:"json",
    	  type:"post",
    	  url:"../controllers/carga_datos.php",
    	  data:{"marca":'all'},
    	  success:function(data){
    	   $("#slt_marca").html("");
    	   $.each(data.marca,function(key,val){
    	   	 var ma = '<option value='+val.id+'>'+val.marca+'</option>';
    	   	 $(ma).appendTo($("#slt_marca"));
    	   });
    	  }
    	});

    	$.ajax({
    	  dataType:"json",
    	  type:"post",
    	  url:"../controllers/carga_datos.php",
    	  data:{"referen":"all"},
    	  success:function(data){
    	   $("#std_referen").html("");
    	   $.each(data.referen,function(key,val){
    	   	 var re = '<option value='+val.id+'>'+val.marca+'</option>';
    	   	 $(re).appendTo($("#std_referen"));
    	   });
    	  }
    	});
=======
    
    $("#menu1").click(function(){
    	$( "#add_product" ).slideToggle();
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80

    	if($("#agregar_canti").is(":visible")){
			$('#agregar_canti').hide(); 
  		}

  		if($("#ver_facturacion").is(":visible")){
			$('#ver_facturacion').hide(); 
  		}

  		if($("#busca_cliente").is(":visible")){
			$('#busca_cliente').hide(); 
  		}
    });
    $("#menu2").click(function(){
    	$( "#agregar_canti" ).slideToggle();

    	if($("#add_product").is(":visible")){
			$('#add_product').hide(); 
  		}

  		if($("#ver_facturacion").is(":visible")){
			$('#ver_facturacion').hide(); 
  		}

  		if($("#busca_cliente").is(":visible")){
			$('#busca_cliente').hide(); 
  		}

  		
    });
    $("#menu3").click(function(){
    	$( "#ver_facturacion" ).slideToggle();

    	if($("#agregar_canti").is(":visible")){
			$('#agregar_canti').hide(); 
  		}

  		if($("#add_product").is(":visible")){
			$('#add_product').hide(); 
  		}

  		if($("#busca_cliente").is(":visible")){
			$('#busca_cliente').hide(); 
  		}
    });
    $("#menu4").click(function(){
    	$( "#busca_cliente" ).slideToggle();

    	if($("#agregar_canti").is(":visible")){
			$('#agregar_canti').hide(); 
  		}

  		if($("#ver_facturacion").is(":visible")){
			$('#ver_facturacion').hide(); 
  		}

  		if($("#add_product").is(":visible")){
			$('#add_product').hide(); 
  		}
    });
<<<<<<< HEAD
  
    $("#btn_save_prod").click(function(){
=======

    $("#btn_save").click(function(){
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
    	var id_prod = $("#inp_prod").val();
    	var marc = $("#slt_marca").val();
    	var refer = $("#std_referen").val();
    	var prec = $("#inp_prec").val();
    	var cant = $("#inp_cant").val();
    	var desc_produc = $("#inp_desc_prod").val();
    	if(id_prod.length > 0 && marc.length > 0 && refer.length > 0 && prec.length > 0 && cant.length > 0 && desc_produc.length > 0){
    		$.ajax({
<<<<<<< HEAD
    			dataType:"json",
    			type:'post',
    			data:{"inp_prod":id_prod,"slt_marca":marc,"std_referen":refer,"inp_prec":prec,"inp_cant":cant,"inp_desc_prod":desc_produc},
    			url:'../controllers/guardar_producto.php',
    			success:function(data){
    			  console.log(data);
    			  if(typeof(data.exito) != "undefined"){
    			  	alert("producto agregado con exito");
    			  	$("#inp_prod").val("");
    				$("#slt_marca").val("");
    				$("#std_referen").val("");
    				$("#inp_prec").val("");
    				$("#inp_cant").val("");
    			  }else{
    			  	alert("no se ha podido añadir el producto");
    			  }
    			}
    		});
    	}else{
    		alert("uno de los campos esta mal escrito o no ha diligenciado correctamente");
    	}
    });

    $("#btn_clean").click(function(){
    	$("#inp_prod").val("");
    	$("#slt_marca").val("");
    	$("#std_referen").val("");
    	$("#inp_prec").val("");
    	$("#inp_cant").val("");
    });

=======
    			datetype:'html',
    			type:'post',
    			data:{"id":id_prod,'marc':marc,'refer':refer,'prec':prec,'cant':cant,'desc_produc':desc_produc},
    			url:'../controllers/carga_datos.php',
    			success:function(data){

    			}
    		});
    	}
    });

>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
    $("#btn_buscar_prod").click(function(){
    	var valor = $("#inp_codigo").val();
    	if(valor.length > 0){
    		$.ajax({
<<<<<<< HEAD
    			datetype:"json",
=======
    			datetype:"html",
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
    			type:"post",
    			data:{"product":valor},
    			url:"../controllers/buscar_product.php",
    			success:function(data){
    				var data = $.parseJSON(data);
<<<<<<< HEAD
    				if(typeof(data.exito) != "undefined"){
    					$("#inp_nomb").val(data.product); 
    					$("#inp_cod").val(data.id); 
    					$("#inp_cost").val(data.precio); 
    					$("#inp_cant").val(data.cantidad); 
    					$('<option value="0">'+data.referencia+'</option>').appendTo($("#inp_refe"));
    					$('<option value="0">'+data.marca+'</option>').appendTo($("#inp_marc"));
    					$("#myModal_modifi_cant").modal("show");					
=======
    			
    				if(data.exito == "exito"){
    					$("#id_pr").text(data.id);
    					$("#refe").text(data.referencia);
    					$("#cant").text(data.cantidad);
    					$("#marc").text(data.marca);
    					$("#nomb").text(data.product);
    					$("#myModal").modal("show");					
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
    				}else{
    					alert("no hay registro");
    				}
    			}
    		});
    	}
    });

<<<<<<< HEAD
    // boton actualizar cambios que halla hecho
    $("#btn_actualiza_prod").click(function(){
      var nombre = $("#inp_nomb").val(); 
      var codigo = $("#inp_cod").val(); 
      var cost = $("#inp_cost").val(); 
      var cant = $("#inp_cant_").val(); 
      var refe = $("#inp_refe").val();
      var marc = $("#inp_marc").val();
      var data = new FormData();
      data.append("nombre",nombre);
      data.append("codigo",codigo);
      data.append("cost",cost);
      data.append("cant",cant);
      data.append("refe",refe);
      data.append("marc",marc);
      $.ajax({
      	dataType:"json",
      	type:"post",
      	contentType: false,
        processData: false,
      	url:"../controllers/guardar_producto.php",
      	data:data,
      	success:function(data){

      	}
      })
    });
=======
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80

    $("#btn_add_cant").click(function(){
    	var cant = $("#imp_num_cant").val();
    	var codi = $("#inp_codigo").val();
    	if(cant > 0){
    		$.ajax({
    			datetype:"html",
    			type:"post",
    			data:{"cantidad":cant,"codigo":codi},
    			url:"../controllers/buscar_product.php",
    			success:function(data){
<<<<<<< HEAD
    				$("#myModal_modifi_cant").modal('show');
=======
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
    				var data = $.parseJSON(data);
    				if(data.exito == "exito"){
    					alert("Datos actualizados con exito");
    				}else{
    					alert("Datos no actualizados, por favor vuela y de click");
    				}
    				alert(data.msg);
    			}
    		});
    	}else{
    		alert("por favor, digite un numero real");
    	}
    });

    $("#btn_busc_clien").click(function(){
    	var cedu = $("#inp_cedu").val();
    	if(cedu > 0){
    		$.ajax({
    			datetype:"html",
    			type:"post",
    			data:{"cedula":cedu},
    			url:"../controllers/buscar_product.php",
    			success:function(data){
    			  var data = $.parseJSON(data);
    			  if(data.exito =="exito"){
    			  	$("#ced").text(data.id);
    			  	$("#nom").text(data.nomb);
    			  	$("#tel").text(data.tel);
    			  	$("#celu").text(data.cel);
    			  	$("#dir").text(data.dir);
    			  	$("#mail").text(data.email);  
    			  }else{
    			  	alert("no existe cliente");
    			  }
    			}
    		});
    	}else{
    		alert("por favor digitar un valor real");
    	}
    });

<<<<<<< HEAD
    $("#inp_codigo").keypress(function(){
      $("#sugerenc_prod").html("");	
      var valor = $(this).val();   
      if(valor.length > 0){
        $.ajax({
        	dataType:"json",
            type:"POST",
            url:'../controllers/mostrar_productos.php',
            data: {"consult_product_":valor},
            success: function(data) {
              if( Object.prototype.toString.call( data ) === '[object Array]' ) { 
                 $.each(data,function(key,val){
			       var t = '<li class=" nav-item list_produc"  id='+val.Produc_id+'> <a class="nav-link" href="#">'+val.Marca_nomb+' + '+val.Referenc_nomb+'</a></li>';
			       $(t).appendTo($("#sugerenc_prod"));
                 }); 
              }else if(typeof data  == 'object'){
              	var t = '<li class=" nav-item list_produc"  id='+data.Produc_id+'> <a class="nav-link" href="#">'+data.Marca_nomb+' + '+data.Referenc_nomb+'</a></li>';
			    $(t).appendTo($("#sugerenc_prod"));
              }    
            }            
        });
	  }  
	});

    $("#inp_codigo").change(function(){
      var valor = $(this).val(); 
      $("#sugerenc_prod").html("");	
      $.ajax({
        	dataType:"json",
            type:"POST",
            url:'../controllers/mostrar_productos.php',
            data: {"consult_product_":valor},
            success: function(data) {
              if( Object.prototype.toString.call( data ) === '[object Array]' ) {
    			$.each(data,function(key,val){
			     var t = '<li class=" nav-item list_produc"  id='+val.Produc_id+'> <a class="nav-link" href="#">'+val.Marca_nomb+' + '+val.Referenc_nomb+'</a></li>';
			     $(t).appendTo($("#sugerenc_prod"));
               });  
			  }else if(typeof data  == 'object'){
			  	var t = '<li class=" nav-item list_produc"  id='+data.Produc_id+'> <a class="nav-link" href="#">'+data.Marca_nomb+' + '+data.Referenc_nomb+'</a></li>';
			     $(t).appendTo($("#sugerenc_prod"));
			  }
                  
            }            
       });
    });

    $("#btn_actualizar").click(function(){
    	alert("actualizando...");
    	var nomb = $("#inp_nomb").val(); 
    	var cod = $("#inp_cod").val(); 
    	var cost = $("#inp_cost").val(); 
    	var cant = $("#inp_cant_").val(); 
    	var refe = $("#inp_refe").val();
    	var marc = $("#inp_marc").val();
    	var form = new FormData();
    	form.append('nombre',nomb);
    	form.append('codigo',cod);
    	form.append('cost',cost);
    	form.append('cant',cant);
    	form.append('refe',refe);
    	form.append('marc',marc);
    	$.ajax({
    	  datatype:"json",
    	  url:"../controllers/guardar_producto.php",
    	  type:"post",
    	  data:form,
    	  contentType: false,
          processData: false,
          success:function(data){
          	console.log(data);
          }
    	});
    });

     // cuando asincrinicamente hace la busqueda por palabra clave, al darle click en un nombre se activa lo siguiente
     $(document).on('click','.list_produc', function(){
       var valor = $(this).attr('id');
    	if(valor.length > 0){
    		$.ajax({
    			datetype:"json",
    			type:"post",
    			data:{"product":valor},
    			url:"../controllers/buscar_product.php",
    			success:function(data){
    				var data = $.parseJSON(data);
    				if(typeof(data.exito) != "undefined"){
    					$("#inp_nomb").val(data.product); 
    					$("#inp_cod").val(data.id); 
    					$("#inp_cost").val(data.precio); 
    					$("#inp_cant_").val(data.cantidad); 
    					$('<option value="0">'+data.referencia+'</option>').appendTo($("#inp_refe"));
    					$('<option value="0">'+data.marca+'</option>').appendTo($("#inp_marc"));
    					$("#myModal_modifi_cant").modal("show");					
    				}else{
    					alert("no hay registro");
    				}
    			}
    		});
    	}
     });


      

=======
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80

    $("#btn_clean").click(function(){
    	$("#inp_cedu").val("");
    	$("#ced").text("");
    	$("#nom").text("");
    	$("#tel").text("");
    	$("#celu").text("");
    	$("#dir").text("");
    	$("#mail").text("");  
    });
});
<<<<<<< HEAD
$(document).on('click',".ver_fact",function(){
  var sum = 0;
  var id = $(this).attr('id');
  $.ajax({
  	dataType:"json",
  	type:"post",
  	url:"../controllers/carga_datos.php",
  	data:{"id_fact":id},
  	success:function(data){
  	  $("#data_person").html("");
  	  $("#tbody_detall").html("");
  	  $("#contact").html("");
  	  var fact = data.factura;
  	  var deta = data.detalles;
  	  $("#num_fact").text("Orden Numero : "+id);
  	  	$('<br>Cedula : <b>'+fact.id_cli+'</b>\
  	       <br>Nombre : <b>'+fact.nomb+'</b>\
  	       <br>Apellido : <b>'+fact.apelli+'</b>').appendTo($("#data_person"));
  	  	$("#fech").text(fact.fecha);
  	  	$('<b>Telefono :</b>'+fact.tel+'<br>\
  	  	   <b>Direccion :</b>'+fact.dir+'<br>\
  	  	   <b>Email :</b>'+fact.mail+'<br>').appendTo($("#contact"));
       $.each(deta,function(key,val){
      	  var detall =
      	  	'<tr>\
    		  <td>'+val.id+'</td>\
    		  <td class="text-center">'+val.cant+'</td>\
    		  <td class="text-right">'+val.cost+'</td>\
    		  <td class="text-right">'+(val.cost * val.cost)+'</td>\
    		</tr>';
    	   sum = sum+(val.cant * val.cost);
       	   $(detall).appendTo($("#tbody_detall"));
       });
       $("#subtotal").text("$"+sum);
       $("#total_").text("$"+sum); 
  	}
  });
});
</script>


<div id="myModal_fact" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Factura</h4>
      </div>
      <div class="modal-body">
     	<div class="row">
    	 <div class="col-md-12">
          <div class="col-xs-12">
    	    <div class="invoice-title">
    		  <h2>Factura</h2><h3 class="pull-right" id="num_fact"></h3>
    		</div>
    		<hr>
    		<div class="row">
    		 <div class="col-xs-6">
    			<address>
    		  	 <strong>Cliente: </strong><br>
    			   <div id="data_person"></div>
    			   
    			</address>
    		 </div>
    		 <div class="col-xs-6 text-right">
    			
    		  </div>
    		</div>
    		<div class="row">
    		  <div class="col-xs-6">
    			<strong>Contacto</strong><br>
    			<div id="contact"></div>
    		  </div>
    		  <div class="col-xs-6 text-right">
    			<address>
    		  	 <strong>Fecha Solicitada:</strong><br>
    					<div id="fech"></div><br><br>
    			 </address>
    		  </div>
    		</div>
     	  </div>
    	 </div>
    	 <div class="row">
    	  <div class="col-md-12">
    		<div class="panel panel-default">
    		 <div class="panel-heading">
    		   <h3 class="panel-title"><strong>Detalles</strong></h3>
    		 </div>
    		 <div class="panel-body">
    		  <div class="table-responsive">
    			<table class="table table-condensed">
    		 	  <thead>
                    <tr>
        		 	  <td><strong>Item</strong></td>
        			  <td class="text-center"><strong>Cantidad</strong></td>
        			  <td class="text-center"><strong>Costo</strong></td>
        			  <td class="text-right"><strong>Total</strong></td>
                    </tr>
    			  </thead>
    			  <tbody id="tbody_detall">
    				<!-- foreach ($order->lineItems as $line) or some such thing here -->
    			 	
    			  </tbody>
    			  <tfooter>
    			  	<tr>
    				  <td class="thick-line"></td>
    				  <td class="thick-line"></td>
    				  <td class="thick-line text-center"><strong>Subtotal</strong></td>
    				  <td class="thick-line text-right" id="subtotal"></td>
    			  	</tr>
    			  	<tr>
    				  <td class="no-line"></td>
    				  <td class="no-line"></td>
    				  <td class="no-line text-center"><strong>Iva</strong></td>
    				  <td class="no-line text-right" id="iva"></td>
    			    </tr>
    			    <tr>
    				  <td class="no-line"></td>
    				  <td class="no-line"></td>
    				  <td class="no-line text-center"><strong>Total</strong></td>
    				  <td class="no-line text-right" id="total_"></td>
    			    </tr>

    			  </tfooter>
    			</table>
    		   </div>
    		 </div>
    		</div>
    	  </div>
         </div>
		</div>
      </div>
    </div>
  </div>
</div>



<div id="myModal_modifi_cant" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modificar Cantidad</h4>
      </div>
      <div class="modal-body">
       	 <div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart" id="btn_actualiza_prod"></span> Actualizacion de productos</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block" id="btn_actualizar">
									<span class="glyphicon glyphicon-share-alt"></span> Actualizar
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6">
						  <div class="col-xs-10">
							<h6 class="product-name"><strong>Nombre</strong></h6><small><input type="text" class="form-control input-xs" id="inp_nomb"></small>
						  </div>
						  <div class="col-xs-10">
							<h6 class="product-name"><strong>COdigo</strong></h6><small><input type="text" class="form-control input-xs" id="inp_cod"></small>
						  </div>

						</div>
						<div class="col-xs-6">
						  <div class="row">
							<div class="col-xs-4 text-right">
								<h6><strong>Costo <span class="text-muted"></span></strong></h6>
							</div>
							<div class="col-xs-8">
								<input type="text" class="form-control input-sm" id="inp_cost">
							</div>
						  </div>
						  <div class="row">
							<div class="col-xs-4 text-right">
								<h6><strong>Cantidad <span class="text-muted"></span></strong></h6>
							</div>
							<div class="col-xs-8">
								<input type="number" class="form-control input-sm" id="inp_cant_">
							</div>
						  </div>
						  <div class="row">
							<div class="col-xs-4 text-right">
								<h6><strong>Referencia <span class="text-muted"></span></strong></h6>
							</div>
							<div class="col-xs-8">
								<select type="text" class="form-control input-sm" id="inp_refe"></select>
							</div>
						  </div>
						  <div class="row">
							<div class="col-xs-4 text-right">
								<h6><strong>Marca <span class="text-muted"></span></strong></h6>
							</div>
							<div class="col-xs-8">
								<select type="text" class="form-control input-sm" id="inp_marc"></select>
							</div>
						  </div>
						  
						</div>
					</div>	
				</div>
				
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript" src="js/btn_out_session.js"></script>
=======

</script>




<?php
   
  	

  



 if(isset($_POST['enviar'])){
 	include_once('../controllers/conectar.php');
 	if(isset($_POST['inp_prod'],$_POST['slt_marca'],$_POST['std_referen'],$_POST['inp_prec'],$_POST['inp_cant'],$_POST['inp_desc_prod'])){
 		$conectar = new Conectar();
 		$id = $_POST['inp_prod'];
 		$marca = $_POST['slt_marca'];
 		$refe = $_POST['std_referen'];
 		$preci = $_POST['inp_prec'];
 		$canti = $_POST['inp_cant'];
 		$descrip = $_POST['inp_desc_prod'];
 		$linea = $_POST['stl_linea'];
		$last_id_descrip =$conectar->Insertar_descripcion($descrip);
		$last_id_canti = $conectar->Insertar_cantidad($canti);
		$conectar->Insertar_precio($id,$preci);
		$exito = $conectar->Insertar_producto($id,$last_id_descrip['last_cod_id'],$marca,$refe,$linea);//
  		if(isset($exito['exito'])){
  		  ?>
				<script> alert("producto almacenado con exito");</script>
  		  <?
  		}else{
  			?>
				<script> alert("producto no almacenado con exito");</script>
  		  	<?
  		  	print_r($exito);
  		}
  	}
 }




?>
>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
