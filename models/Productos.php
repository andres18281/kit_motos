
<?php
  include_once("../controllers/conectar.php");
  class Productos extends Conectar{

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

    public function Buscar_producto($producto){
      $sql = 'SELECT Produc_id, Descri_nomb, Marca_nomb, Referenc_nomb,Precio
              FROM Producto_kit Pro_kit
              INNER JOIN Produc_descripcion_ Pd ON Pd.Descri_id = Pro_kit.Produc_descr_id
              INNER JOIN Produc_Marca PM ON PM.Marca_id = Pro_kit.Produc_marc_id
              INNER JOIN Produc_Referencia PR ON PR.Referen_id = Pro_kit.Produc_referen_id
              WHERE Pd.Descri_nomb LIKE  "%'.$producto.'%"
              OR PR.Referenc_nomb LIKE  "%'.$producto.'%"
              OR PM.Marca_nomb LIKE  "%'.$producto.'%"
              OR Pro_kit.Produc_id LIKE  "%'.$producto.'%"';
      $data = parent::consultas($sql);
      return $data;
    }
  
    public function Buscar_producto_tow($producto){
      $sql = 'SELECT Produc_id, Marca_nomb,Referenc_nomb
              FROM Producto_kit Pro_kit
              INNER JOIN Produc_descripcion_ Pd ON Pd.Descri_id = Pro_kit.Produc_descr_id
              INNER JOIN Produc_Marca PM ON PM.Marca_id = Pro_kit.Produc_marc_id
              INNER JOIN Produc_Referencia PR ON PR.Referen_id = Pro_kit.Produc_referen_id
              WHERE Pd.Descri_nomb LIKE  "%'.$producto.'%"
              OR PR.Referenc_nomb LIKE  "%'.$producto.'%"
              OR PM.Marca_nomb LIKE  "%'.$producto.'%"
              OR Pro_kit.Produc_id LIKE  "%'.$producto.'%"';
      $data = parent::consultas($sql);
      return $data;
    }

    public function update_producto($codigo,$nombre,$cost,$cant,$refere,$marc){
      $verifica_up = Array();
      if($marc != 0 and $refere != 0){
        $sql = 'UPDATE producto_kit
                SET Produc_referen_id = '.$refere.',
                Produc_marc_id = '.$marc.',
                Precio = '.$cost.'
                WHERE Produc_id ="'.$codigo.'"';
        $actuali = parent::update_query($sql);
        $verifica = Array($actuali);
        $verifica_up['uno'] = $verifica;
      }

      if($marc != 0 and $refere == 0){
        $sql = 'UPDATE producto_kit
                SET Produc_marc_id = '.$marc.',
                Precio = '.$cost.'
                WHERE Produc_id ="'.$codigo.'"';
        $actuali = parent::update_query($sql);
        $verifica = Array($actuali); 
        $verifica_up['dos'] = $verifica;
      }

      if($refere != 0 and $marc == 0){
        $sql = 'UPDATE producto_kit
                SET Produc_referen_id = '.$refere.',
                Precio = '.$cost.'
                WHERE Produc_id ="'.$codigo.'"';
        $actuali = parent::update_query($sql);
        $verifica = Array($actuali); 
        $verifica_up['tres'] = $verifica;
      }
      
      $con = 'SELECT Produc_descr_id 
              FROM producto_kit 
              WHERE Produc_id = "'.$codigo.'"';
      $data = parent::consultas($con);
      $verifica = Array($data);
      $verifica_up['cuat'] = $verifica;

      $sql2 = 'UPDATE produc_descripcion_ 
              SET Descri_nomb = "'.$nombre.'"
              WHERE Descri_id = '.$data['Produc_descr_id'];
      $actuali2 = parent::update_query($sql2);
      $verifica = Array($actuali2); 
      $verifica_up['cinc'] = $verifica;

      $upda_cant = 'UPDATE produc_cantidad_producto 
                    SET  Cant_product = "'.$cant.'"
                    WHERE id_product = "'.$codigo.'"';   
      $actuali2 = parent::update_query($upda_cant);
      $verifica = Array($actuali2); 
      $verifica_up['seis'] = $verifica;

      if($marc == 0 and $refere == 0){
         $sql = 'UPDATE producto_kit
                SET Precio = '.$cost.' 
                WHERE Produc_id ="'.$codigo.'"';
        $actuali = parent::update_query($sql);
        $verifica = Array($actuali); 
        $verifica_up['siet'] = $verifica;
      }

      return $verifica_up;
    }
  }
?>
