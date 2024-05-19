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

        public function getUsuarios() {
            if ($this->connect) {

                $sql = "SELECT * FROM usuario";
                $result = $this->connect->query($sql);
                $request = $result->fetchAll(PDO::FETCH_ASSOC);
                return $request;
            }
            
        }

        public function updateUser(int $id, string $nombre, string $telefono, string $email)
        {
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->email = $email;
            $sql = "UPDATE usuario SET nombre = :nombre, telefono = :telefono, email = :email WHERE id = :id";
            if($this->connect)
            {
                $update = $this->connect->prepare($sql);
                $array = array(":nombre" => $this->nombre, ":telefono" => $this->telefono, ":email" => $this->email, ":id" => $id);
                $response = $update->execute($array);
                return $response;
            }
        }

        public function getUsuario(int $id)
        {
            $sql = "SELECT * FROM usuario WHERE id = :id";
            if($this->connect)
            {
                $getUser = $this->connect->prepare($sql);
                $array = array(":id" => $id);
                $getUser->execute($array);
                $request = $getUser->fetch(PDO::FETCH_ASSOC);
                return $request;
            }
        }

        public function deleteUsuario(int $id)
        {
            $sql = "DELETE FROM usuario WHERE id = :id";
            if($this->connect)
            {
                $delete = $this->connect->prepare($sql);
                $array = array(":id" => $id);
                $response = $delete->execute($array);
                return $response;
            }
        }
    }

?>