<?php

    require_once("classEmpleado.php");
    require_once("classCliente.php");

    $objEmpleado = new Empleado(1, "Juan", 20);
    $objEmpleado->setPuesto("Programador");
    echo $objEmpleado->getDatosPersonales();
    echo $objEmpleado->getPuesto();

    $objCliente = new Cliente(1, "Jose", 20);
    $objCliente->setCredito(1000);
    echo $objCliente->getDatosPersonales();
    echo $objCliente->getCredito();

?>