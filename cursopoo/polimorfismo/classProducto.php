<?php 

    class Productos{
        public $descripcion;
        public $precio;
        protected $stockMinimo = 10;
        protected $estado = "Activo";

        public function __construct(string $descripcion, string $precio){
            $this->descripcion = $descripcion;
            $this->precio = $precio;
        }

        public function getInfoProducto(){
            $arrProducto = array(
                'producto' => $this->descripcion,
                'precio' => $this->precio,
                'stockMinimo' => $this->stockMinimo,
                'estado' => $this->estado
            );

            return $arrProducto;
        }
    }

?>