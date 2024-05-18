<?php

    require_once("classPersona.php");

    $persona = new Persona(1, "Juan", 20);
    echo $persona->getDatosPersonales()
?>