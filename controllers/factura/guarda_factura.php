<?php
if(!isset($_SESSION)){
	session_start();
}
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once('models/Factura.php');
require_once('controllers/conectar.php');
class guarda_factura extends factura{

	private $id_factura = 0;
	public function __construct($cedula){
		parent::__construct($cedula);
		parent::set_fecha();
	}

	public function get_id_factura(){
		return $this->id_factura;

	}
	public function facturar_detalles(){
		foreach($_SESSION['produc_var_session_'] as $articulos){	
			parent::add_detalle($articulos['id'],$articulos['descrip'],1,$articulos['precio']);
		}
	}

	public function agrega_facturacion_db(){
		$inserta = new Conectar();
		$verificar = $inserta->inserta("kit_facturacion",array("Id_factura"=>'',
															   "id_client"=>parent::get_codigo_cliente(), 					  
										  					   "Fact_cancel"=>2,
										  					   "Total"=>parent::get_costo_total(),
										  					   )); //

		if(array_key_exists("exito",$verificar)){
			$this->id_factura = $verificar["last_cod_id"];
			foreach(parent::mostrar() as $fact){
				$verifica_detalle = $inserta->inserta("descripcion_factura",array("cod_produc"=>$fact['codigo'],
																		 		  "cantidad"=>1,
																		 		  "Costo"=>$fact['costo'],
																		 		  "id_solicitud"=>$this->get_id_factura()
																		 	));
			}
			if(array_key_exists("exito",$verifica_detalle)){
				echo $verifica_detalle["exito"];
			
			}elseif(array_key_exists("error",$verifica_detalle)){
				echo "Presenta un error en la insercion de detalles de compra";
			}	
								
		}elseif(array_key_exists("error",$verificar)){
			return true;
		}else{
			return false;
		}
	}

}
?>