<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Imágenes blobt</title>
</head>
<body>
    <?php
    
    $id="";
    $contenido="";
    $tipo="";

    require("conectar.php");
    $base=Conectar::conexion();

    $sql="SELECT id, type_archive, content_archive FROM archives WHERE id=:id";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":id" => 10));

    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
            
            $id=$fila['id'];
            $contenido=$fila['content_archive'];
            $tipo=$fila['type_archive'];

            echo "Id: " . $id;
            echo " | <br>";
            echo "Tipo: " . $tipo;
            echo " | <br>";
            echo "<img src='data:image/png; base64," . base64_encode($contenido) . "'>";

        }
    
    ?>

    <div>
        <img src="assets/<?php echo $ruta_img; ?>" alt="Imagen Artículo" width=50%>
    </div>

</body>
</html>