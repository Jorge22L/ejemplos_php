<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "Hola $nombre";
        }
        else{
            echo "No has introducido tu nombre";
        }
    }

?>