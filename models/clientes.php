<?php
include_once("../controllers/conectar.php");
class Cliente extends Conectar{
	private $cedula;
	private $nombre;
	private $apellido;
	private $tel;
	private $direc;
	private $email;
	public function __construct($cedula,$nombre,$apellido,$tel,$direc,$email){
		$this->$cedula = $cedula;
		$this->$apellido = $apellido;
		$this->$tel = $tel;
		$this->$direc = $direc;
		$this->$email = $email;

	}
	public function get_cedula(){
		return $this->$cedula;
	}
	public function get_nombre(){
		return $this->$nombre;
	}
	public function get_apellido(){
		return $this->$apellido;
	}
	public function get_tel(){
		return $this->$direc;
	}
	public function get_mail(){
		return $this->$email;
	}

	public function get_factura($id){
		$sql = 'SELECT Id_factura
				FROM  Solicitud_facturacion sf 
				INNER JOIN Clientes_kit_motos ckm ON ckm.Usua_id = sf.id_client
				WHERE Usua_id = '.$id;
		$datos = parent::consultas($sql);
		return $datos;
	}
}


?>