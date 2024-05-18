<?php

    require_once("classPersona.php");
    class Empleado extends Persona{
        protected $puesto;

        public function __construct(int $id, string $nombre, int $edad){
            parent::__construct($id, $nombre, $edad);
        }

        public function getPuesto():string{
            return $this->puesto;
        }
        public function setPuesto(string $puesto){
            $this->puesto = $puesto;
        }
    }
?>