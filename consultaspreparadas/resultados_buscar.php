<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $country=$_GET['buscar'];

        require("conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";

            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de Datos");

        mysqli_set_charset($conexion, "utf8");

        $consultasql="SELECT brand_name, country FROM brands WHERE country=?";

        $resultado=mysqli_prepare($conexion, $consultasql);

        $ok=mysqli_stmt_bind_param($resultado, "s", $country);

        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){

            echo "Error al ejecutar la consulta";

        }else{

            $ok=mysqli_stmt_bind_result($resultado, $brand_name, $country);

            echo "Se encontró: <br><br>";
            
            while (mysqli_stmt_fetch($resultado)){

                echo $brand_name . " ". $country . "<br><br>";
            }

            mysqli_stmt_close($resultado);
        }



    ?>
</body>
</html>