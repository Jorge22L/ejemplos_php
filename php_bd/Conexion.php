<?php 
    class Conexion {
        private $host = "localhost";
        private $user = "root";
        private $password = "1234";
        private $db = "db_sistema";
        private $connect; //objetos conexión

        public function __construct()
        {
            $connection_string = "mysql:host=$this->host;dbname=$this->db; charset=utf8";

            try {
                $this->connect = new PDO($connection_string, $this->user, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $this->connect = null;
                echo "Error de conexión: " . $e->getMessage();
            }
        }

        public function getConnect() {
            return $this->connect;
        }
    }

?>