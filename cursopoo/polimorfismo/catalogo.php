<?php
    require_once('classMesa.php');
    $objCama = new Productos('Cama', 2000);
    $arrProducto = $objCama->getInfoProducto();
    
    print_r($arrProducto);
?>