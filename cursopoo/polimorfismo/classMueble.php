<?php

    require_once('classProducto.php');

    class Mueble extends Productos{
        public $color;
        public $material;
        public $estado = "Agotado";

        public function __construct(string $descripcion, float $precio,string $color, string $material){
            parent::__construct($descripcion, $precio);
            $this->color = $color;
            $this->material = $material;
        }

        public function getInfoProducto()
        {
            $arrProducto = array(
                'producto' => $this->descripcion,
                'precio' => $this->precio,
                'stockMinimo' => $this->stockMinimo,
                'material' => $this->material,
                'color' => $this->color,
                'estado' => $this->estado
            );

            return $arrProducto;
        }
            
        
    }

?>