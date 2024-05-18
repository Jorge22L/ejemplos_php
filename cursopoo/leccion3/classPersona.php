<?php
    class Persona{
        public $id;
        public $nombre;
        public $edad;

        public function __construct(int $id, string $nombre, int $edad){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getDatosPersonales(){
            $datos = "
            <h2>Datos Personales</h2>
            ID: {$this->id}<br>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
            ";

            return $datos;
        }
    }
?>