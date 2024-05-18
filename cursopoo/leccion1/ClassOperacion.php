<?php
    class Operacion
    {
        //Atributos - Propiedades
        public $cantidad1 = 0;
        public $cantidad2 = 0;
        public $resultado = 0;

        //Metodos
        //Constructor
        function __construct($intCant1, $intCant2)
        {
            $this->cantidad1 = $intCant1;
            $this->cantidad2 = $intCant2;
            
        }

        //Método de Suma
        public function getSuma()
        {
            $this->resultado = $this->cantidad1 + $this->cantidad2;
            return $this->resultado;
        }

        //Método de Resta
        public function getResta()
        {
            $this->resultado = $this->cantidad1 - $this->cantidad2;
            return $this->resultado;
        }

        //Método de Multiplicación
        public function getMultiplicacion()
        {
            $this->resultado = $this->cantidad1 * $this->cantidad2;
            return $this->resultado;
        }
        
        //Método de División
        public function getDivision()
        {
            $this->resultado = $this->cantidad1 / $this->cantidad2;
            return $this->resultado;
        }
    }//End class
?>