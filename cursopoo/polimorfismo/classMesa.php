<?php

    require_once('classMueble.php');
    class Mesas extends Mueble{
        private $forma = "";
        private $tamanio;

        public function __construct(string $descripcion, float $precio, string $color, string $material, string $forma, string $tamanio){
            parent::__construct($descripcion, $precio, $color, $material);
            $this->forma = $forma;
            $this->tamanio = $tamanio;
        }

        public function setForma(string $forma){
            $this->forma = $forma;
        }

        public function getForma(){
            return $this->forma;
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