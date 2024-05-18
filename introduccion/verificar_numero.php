<?php
define("Mensaje_Error", "Porfavor, introduce un número");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['numero']) && is_numeric($_POST['numero'])){
        $numero = $_POST['numero'];

        if($numero > 0){
            echo "El número $numero es positivo";
        }
        else if($numero < 0){
            echo "El número $numero es negativo";
        }
        else{
            echo "El número $numero es cero";
        }
    }
    else{
        echo Mensaje_Error;
    }

}
?>