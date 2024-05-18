<?php

    require_once("classPersona.php");
    class Cliente extends Persona{
        protected $credito;
        public function __construct(int $id, string $nombre, int $edad){
            parent::__construct($id, $nombre, $edad);
        }

        public function getCredito():float{
            return $this->credito;
        }
        public function setCredito(float $credito){
            $this->credito = $credito;
        }
    }
?>