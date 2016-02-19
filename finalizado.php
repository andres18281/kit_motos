<?php
if(!isset($_SESSION)){
 session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		@import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
		@import "http://fonts.googleapis.com/css?family=Roboto:400,500";

		.box > .icon { text-align: center; position: relative; }
		.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #63B76C; vertical-align: middle; }
		.box > .icon:hover > .image { background: #333; }
		.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
		.box > .icon:hover > .image > i { color: white !important; }
		.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
		.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
		.box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
		.box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
		.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
		.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
		.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
		.box .space { height: 30px; }
	</style>


</head>
<body>
 <div class="container">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-thumbs-o-up"></i></div>
					<div class="info">
						<h3 class="title">Finalizado</h3>
						<p>
							Su pedido fue realizado exitosamente, pronto nos comunicaremos con usted.
						</p>
						<div class="more">
							<a href="#" title="Title Link">
								Terminos y condiciones <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
	</div>
</div>
</body>
</html>