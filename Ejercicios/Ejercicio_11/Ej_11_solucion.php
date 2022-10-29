<?php
    $precio = $_GET["pre"];
    $descuento = ($precio * 15) / 100;
    $total = $precio + $descuento;

    echo " Ganaste el beneficio de un descuento ".$descueno." con un ".$total." de : "

?>