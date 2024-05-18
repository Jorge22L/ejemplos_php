<?php
    class Usuairo{
        private $nombre;
        private $email;
        private $tipo;
        private $clave;
        protected $fechaRegistro;
        static $estado = "activo";

        public function __construct(string $nombre, string  $email, string $tipo){
            $this->nombre = $nombre;
            $this->email = $email;
            $this->tipo = $tipo; 
            $this->clave = rand();
        }

        public function getNombre():string{
            return $this->nombre;
        }
        public function getEmail():string{
            return $this->email;
        }
        public function getPerfil(){
            echo "Datos del usuario <br>";
            echo "Nombre: ".$this->getNombre()."<br>";
            echo "Email: ".$this->getEmail()."<br>";
        }

    }//fin de la clase
?>