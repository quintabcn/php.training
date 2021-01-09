<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require("conexion.php");

    $c_brand=$_GET["c_brand"];
    $c_country=$_GET["c_country"];
            
    $conexion=mysqli_connect($db_host, $db_usuario, $db_password);
                
                if(mysqli_connect_errno()){
                    echo "Fallo en la conexión con servidor BBDD";
                    exit();
                }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de Datos");
            
    mysqli_set_charset($conexion, "utf8");

    $consulta="INSERT INTO brands (brand_name,country) VALUES ('$c_brand','$c_country')";
            
    $resultados=mysqli_query($conexion, $consulta);
                
                if($resultados==false){
                    echo "Error en la consulta";

                }else{
                    echo "Registro guardado <br><br>";
                    echo "<table><tr><td>$c_brand</td></tr>";
                    echo "<tr><td>$c_country</td></tr></table>";
                }

            
    mysqli_close($conexion);

    ?>
</body>
</html>