<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require("conectar.php");
    $base=Conectar::conexion();

    $sql="SELECT photo FROM perfumes WHERE idperfume=:id";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":id" => 2));

    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
            $ruta_img=$fila['photo'];

            echo $ruta_img;
        }
    
    ?>

    <div>
        <img src="assets/<?php echo $ruta_img; ?>" alt="Imagen Artículo" width=50%>
    </div>

</body>
</html>