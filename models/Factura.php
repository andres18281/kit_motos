<?php
require('DetallesDAO.php');
class factura extends DetallesDAO{
    private $codigo_cliente;
    private $total;
    private $fecha;
    private $id_fact = 0;
    public function __construct($codigo_cliente){
        $this->codigo_cliente = $codigo_cliente;
    }
    public function set_fecha(){
        $this->fecha = date('dmY');
    }

    public function Set_codigo_cliente($codigo_cliente){
        $this->codigo_cliente = $codigo_cliente;
    }

    public function Set_factura($id_fact){
        $this->id_fact = $id_fact;
    }
    
    public function get_codigo_factura(){
        return $this->id_factura;
    }
    public function get_fecha(){
        return $this->fecha;
    }
    public function get_codigo_cliente(){
        return $this->codigo_cliente;
    }
    public function get_costo_total(){
        $total = parent::calculo_total();
        return $total;
    }
    

    public function add_detalle($codigo,$nombre,$cantidad,$costo){     
        parent::agregar($codigo,$nombre,$cantidad,$costo);
    }
    public function eliminar($posicion){
        parent::borrar($posicion);
    }
    public function mostrar(){        
        $arreglo = parent::mostrar();
        return $arreglo;   
    }

}
?>