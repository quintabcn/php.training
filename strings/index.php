<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>

    <style>
        .resaltar{
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"
    ?>

    <?php
        $nombre1="casa";
        $nombre2="casa";

        $resultado=strcmp($nombre1, $nombre2);

        if (!$resultado){
                echo "Coinciden";
        } else {
            echo "No coinciden";
        }
        
    ?>
    
</body>
</html>