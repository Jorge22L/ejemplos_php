<?php 

require_once("Autoload.php");

//insertando datos
$usuario = new Usuario();
//$insert = $usuario->insertUsuario("José","123456789","jose@mail.com");
//echo $insert;



// $updateUser = $usuario->updateUser(2,"José","123456789","jose@mail.com");
//echo $updateUser;

//borrando un usuario
// $borrar = $usuario->deleteUsuario(3);
// echo $borrar;

//mostrando todos los registros
$usuarios = $usuario->getUsuarios();
echo "<pre>";
print_r($usuarios);
echo "</pre>";

//mostrando un usuario 
$usuario = $usuario->getUsuario(4);
echo "<pre>";
print_r($usuario);
echo "</pre>";
?>