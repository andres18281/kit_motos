<?php

class DetallesDAO{
     private $costo_total = 0;
     private $arreglo;
    public function __construct() {
    }   
    public function agregar($codigo,$nombre,$cantidad,$costo){
        $producto = array("codigo"=>$codigo,"nombre"=>$nombre,"cantidad"=>$cantidad,"costo"=>$costo);
        $this->arreglo[] = $producto;
    }
    public function borrar($posicion){
        unset($this->arreglo[$posicion]);
    }
    public function mostrar(){
            return $this->arreglo; 
    }
    public function calculo_total(){
        foreach($this->arreglo as $array){
<<<<<<< HEAD
                $this->costo_total +=  1 * $array['costo'];
        }
        return $this->costo_total;
    }
=======
                $this->costo_total +=  $array['cantidad'] * $array['costo'];
        }
        return $this->costo_total;
    }

>>>>>>> e7b49836166a8a2b3b0fd3b018afdae047c15f80
}
?>