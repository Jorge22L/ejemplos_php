<?php

    require_once("ClassUsuario.php");

    $usuarioUno = new Usuairo("jose","jose@jose","admin");

    echo $usuarioUno->getPerfil();
?>