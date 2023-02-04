<?php

    $humidity = $_GET["h"];
    $temperature = $_GET["t"];
        
    $textH = "Humidity:" . $humidity . " %";
    $textT = "Temperature:" . $temperature . " ºC";
        
    echo $textH;
    echo "<br>";
    echo $textT;
?>
