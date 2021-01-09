<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        require("conexion.php");
                
        $conexion=mysqli_connect($db_host, $db_usuario, $db_password);
                    
                    if(mysqli_connect_errno()){
                        echo "Fallo en la conexión con servidor BBDD";
                        exit();
                    }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de Datos");
                
        mysqli_set_charset($conexion, "utf8");

        $consulta="INSERT INTO brands (brand_name,country) VALUES ('Dior', 'ES')";
                
        $resultados=mysqli_query($conexion, $consulta);

                
        mysqli_close($conexion);

    ?>

</head>
<body>

    
</body>
</html>