<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/fileinput.css">-->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
		<form method="POST" action="">
		 <div class="container-fluid">
		  <div class="panel panel-danger">
		   <div class="panel-heading">
			  AGREGAR PRODUCTO
		   </div>
		   <div class="panel-body">
			<div class="row form-group">
			 <div class="col-md-4">
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
			  <label> Codigo de producto</label>
			 </div>	
			 <div class="col-md-8">
			  <input type="number" class="form-control"  name="inp_prod" id="inp_prod">
			 </div>	
			</div>

			<div class="row form-group">
			 <div class="col-md-4">

			  <label> Seleccionar Marca</label>
			 </div>	
			 <div class="col-md-8">
			  <select class="form-control" name="slt_marca" id="slt_marca">
			   <?php	
				foreach($respon_marca as $value){
 				  echo '<option value="'.$value[0].'">'.$value[1].'</option>';
 				}
 			    ?>
			  </select>
			 </div>	
			</div>

			<div class="row form-group">
			 <div class="col-md-4">
			  <label> Seleccionar Referencia</label>
			 </div>	
			 <div class="col-md-8">
			  <select class="form-control" name="std_referen" id="std_referen">
				<?php
				 foreach($respon_referenc as $refe){
				 	echo '<option value="'.$refe[0].'">'.$refe[1].'</option>';
				 }
				?>
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
				<button class="btn btn-block btn-success" id="btn_save" name="enviar" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>  Guardar</button>
		  	  </div>
	 	 	</div>
		   </div>
		  </div>
		 </div>
	 	</form>
	 	</div><!--#agregar_producto-->

	 	<div id="agregar_canti" class="container-fluid" style="display:none;">
		 <div class="panel panel-success">
		  <div class="panel-heading">
			Abastecer cantidades de productos
		  </div>
		  <div class="panel-body">
			<div class="form-group">
			 <div class="row">
			   <div class="col-md-4">
				 <label>Codigo de producto</label>
			   </div>
			   <div class="col-md-6">
				 <input type="text" class="form-control" id="inp_codigo">
			   </div>
			 </div>
			 
			 <div class="row" style="margin-top:50px;"> 
			  <div class="col-md-6">
				<button class="btn btn-default btn-block">Limpiar campos</button>
			  </div>
			  <div class="col-md-6">
				<button class="btn btn-success btn-block" id="btn_buscar_prod"><span class="glyphicon glyphicon-search"></span></button>
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
        		<tbody id="list_fact">
            	 
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
    $("#menu3").click(function(){
    	$.ajax({
    	  dataType:"json",
    	  type:"post",
    	  url:"../controllers/Configuracion_Admin.php",
    	  data:{"fact_sin_cancelar":"all"},
    	  success:function(data){
    	  	  $.each(data,function(key,value){
    	  	  	console.log(value);
    	  	   	var t = '<tr>\
    	  					 <td>'+value.Id_factura+'</td>\
    	  					 <td>'+value.id_client+'</td>\
    	  					 <td>'+value.Fact_fecha+'</td>\
    	  			 	 	 <td>'+value.Total+'</td>\
    	  			     </td>';
    	  		$(t).appendTo($("#body_compra"));
    	  	  });
    	  }
    	});
    });

    	
    $("#menu1").click(function(){
    	$( "#add_product" ).slideToggle();

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

    $("#btn_save").click(function(){
    	var id_prod = $("#inp_prod").val();
    	var marc = $("#slt_marca").val();
    	var refer = $("#std_referen").val();
    	var prec = $("#inp_prec").val();
    	var cant = $("#inp_cant").val();
    	var desc_produc = $("#inp_desc_prod").val();
    	if(id_prod.length > 0 && marc.length > 0 && refer.length > 0 && prec.length > 0 && cant.length > 0 && desc_produc.length > 0){
    		$.ajax({
    			datetype:'html',
    			type:'post',
    			data:{"id":id_prod,'marc':marc,'refer':refer,'prec':prec,'cant':cant,'desc_produc':desc_produc},
    			url:'../controllers/carga_datos.php',
    			success:function(data){

    			}
    		});
    	}
    });

    $("#btn_buscar_prod").click(function(){
    	var valor = $("#inp_codigo").val();
    	if(valor.length > 0){
    		$.ajax({
    			datetype:"html",
    			type:"post",
    			data:{"product":valor},
    			url:"../controllers/buscar_product.php",
    			success:function(data){
    				var data = $.parseJSON(data);
    			
    				if(data.exito == "exito"){
    					$("#id_pr").text(data.id);
    					$("#refe").text(data.referencia);
    					$("#cant").text(data.cantidad);
    					$("#marc").text(data.marca);
    					$("#nomb").text(data.product);
    					$("#myModal").modal("show");					
    				}else{
    					alert("no hay registro");
    				}
    			}
    		});
    	}
    });


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

</script>




