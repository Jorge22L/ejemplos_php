<?php 
require_once("Autoload.php");
    class Usuario extends Conexion {
        private $id;
        private $nombre;
        private $telefono;
        private $email;
        private $connect;

        public function __construct() {
            parent::__construct();
            $this->connect = $this->getConnect();
        }

        public function insertUsuario(string $nombre, string $telefono, string $email) 
        {
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->email = $email;
            
            if ($this->connect) {
                $query = "INSERT INTO usuario (nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
                $insert = $this->connect->prepare($query);
                $arrayName = array(":nombre" => $this->nombre, ":telefono" => $this->telefono, ":email" => $this->email);
                $insert->execute($arrayName);
                $idInsert = $this->connect->lastInsertId();
                $this->id = $idInsert;
                return $idInsert;
            } else {
                echo "Error de Conexión";
            }
            

        }
    }

?>