<?php
    require "devuelveproductos.php";

    $productos=new DevuelveProductos();

    $array_productos=$productos->get_productos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        foreach ($array_productos as $elemento){

            echo "<table><tr><td>";
            echo $elemento['perfume_name']."</td><td>";
            echo $elemento['brand_name']."</td><td>";
            echo $elemento['conc']."</td><td>";
            echo $elemento['genero']."</td><td>";
            echo $elemento['year']."</td><td>";
            echo $elemento['perfume_family']."</td><td>";
            echo $elemento['perfume_subfamily']."</td><td>";
            echo $elemento['duracion']."</td><td>";
            echo $elemento['profundidad']."</td><td>";
            echo "</tr></table>";

            echo "<br>";
            echo "<br>";

        }

    ?>
</body>
</html>