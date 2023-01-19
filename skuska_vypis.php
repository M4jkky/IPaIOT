<html lang="sk">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style media="screen">
            html {
                height: 100%;
            }
            body {
                margin:0;
                padding:0;
                font-family: sans-serif;
            }

            * {
                text-align: center;
            }

        </style>

        <title>Document</title>
    </head>

    <body>

    <h1 style="color:blue;">ESP VALUES</h1>

    </body>
</html>

<?php

    $humidity = $_GET["h"];
    $temperature = $_GET["t"];
        
    $textH = "Humidity:" . $humidity . " %";
    $textT = "Temperature" . $temperature . " C";
        
    echo $textH;
    echo "<br>";
    echo $textT;
?>
