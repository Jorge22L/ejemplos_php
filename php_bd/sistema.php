<?php 

require_once("Autoload.php");

//insertando datos
$usuario = new Usuario();
$insert = $usuario->insertUsuario("jorge","123456789","jorge@jorge");
echo $insert;
?>