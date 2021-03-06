
<?php
  include_once("../controllers/conectar.php");
  class Agregar extends Conectar{

  	public function __construct(){
  		parent::__construct('root','123456');

  	}

  	public function Set_marca($name){
  		$array = Array('Marca_id'=>'',
  					   'Marca_nomb'=>$name);
  		parent::inserta($array,"Produc_Marca");
  	}

  	public function Set_referencia($name){
  		$array = Array('Referen_id'=>'',
  					   'Referenc_nomb'=>$name);
  		parent::inserta($array,"Produc_Referencia");
  	}

  	public function Set_precio($id,$id_produc,$precio){
  		$sql = 'SELECT Id FROM Produc_Precio WHERE Precio_id_ ='.$id_produc;
  		$verifica = parent::consultas($sql);
  		if(isset($verifica)){
  			$update = 'UPDATE Produc_Precio
  					   SET Precio_cost ='.$precio.' 
  					   WHERE id ='.$verifica[0];
  			$verifica_up =parent::update_query($update);
  			if(isset($verifica_up['mensaje'])){
  				$exito['exito'] = "exito actualizando";
  				return $exito;
  			}else{
  				return null;
  			}
  			$array = Array('Id'=>'',
  					   	   'Precio_id_'=>$id_produc,
  					   	   'Referenc_nomb'=>$precio
  					 	  );
  			$inserta = $parent::inserta($array,"Produc_Precio");	
  			if(isset($inserta['exito'])){
  				$exito['exito'] = "exito insertando";
  				return $exito;
  			}else{
  				return null;
  			}
  		}
  	}

  	public function Set_imagen($name){
  		$array = Array('Id_imagen'=>'',
  					   'Nombre'=>$name);
  		parent::inserta($array,"Produc_Imagen_");
  	}


  	public function Set_cantidad_producto($id,$cantidad){
  		$sql = 'SELECT Id FROM Produc_cantidad_producto WHERE id ='.$id;
  		$verifica = parent::consultas($sql);
  		if(isset($verifica)){
  			$update = 'UPDATE Produc_cantidad_producto
  					   SET Cant_product ='.$cantidad.' 
  					   WHERE id ='.$id;
  			$verifica_up =parent::update_query($update);
  			if(isset($verifica_up['mensaje'])){
  				$exito['exito'] = "exito actualizando";
  				return $exito;
  			}else{
  				return null;
  			}
  		}else{
  			$array = Array('Id'=>'',
  					   	   'id_product'=>$name,
  					   	   'Cant_product'=>$cantidad);
  			$inserta = parent::inserta($array,"Produc_Imagen_");	
  			if(isset($inserta['exito'])){
  				$exito['exito'] = "exito insertando";
  				return $exito;
  			}else{
  				return null;
  			}
  		}
  	}


  	public function Get_referencia(){
  		$sql = 'SELECT Referen_id,Referenc_nomb
  				FROM Produc_Referencia';
  		$datos = parent::consultas($sql);
  		return $datos;
  	}

  	public function Get_tipo_producto(){
  		$sql = 'SELECT *
  				FROM Produc_Tipo_producto';
  		$datos = parent::consultas($sql);
  		return $datos;
  	}

  	public function Get_Marca(){
  		$sql = 'SELECT *
  				FROM Produc_Marca';
  		$datos = parent::consultas($sql);
  		return $datos;
  	}

  }



?>
