<?php

    require_once ("ClassOperacion.php"); //Llamada al archivo "ClassOperacion.php";

    $objOperacion = new Operacion(10, 5); //Instancia de la clase Operacion

    $totalSuma =  $objOperacion->getSuma();
    $totalResta =  $objOperacion->getResta();
    $totalMultiplicacion=  $objOperacion->getMultiplicacion();
    $totalDivision=  $objOperacion->getDivision();
    echo "Total suma: ". $totalSuma;
    echo "<br>";
    echo "Total resta: ". $totalResta;
    echo "<br>";
    echo "Total multiplicación: ". $totalMultiplicacion;
    echo "<br>";
    echo "Total division: ". $totalDivision;
    echo "<br>";

?>