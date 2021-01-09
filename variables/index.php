<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nombre="Juan";

    function dameNombre(){
        global $nombre;
        $nombre="El nombre es... " . $nombre . "<br>";

    }

    //include("datosotros.php");

    dameNombre();

    echo $nombre;

    function incrementar(){
        static $contador=0;
        $contador++;

        echo $contador;
    }

    incrementar();
    incrementar();
    incrementar();
    incrementar();
    incrementar();

    ?>
</body>
</html>