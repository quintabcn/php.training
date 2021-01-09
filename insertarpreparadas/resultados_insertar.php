<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $brand=$_GET['brand'];
        $country=$_GET['country'];

        require("conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";

            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de Datos");

        mysqli_set_charset($conexion, "utf8");

        $consultasql="INSERT INTO brands (brand_name, country) VALUES (?,?)";

        $resultado=mysqli_prepare($conexion, $consultasql);

        $ok=mysqli_stmt_bind_param($resultado, "ss", $brand, $country);

        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){

            echo "Error al ejecutar la consulta";

        }else{

           // $ok=mysqli_stmt_bind_result($resultado, $brand_name, $country);

            echo "Agregado nuevo registro <br><br>";
            
           // while (mysqli_stmt_fetch($resultado)){

               // echo $brand_name . " ". $country . "<br><br>";
            //}

            mysqli_stmt_close($resultado);
        }



    ?>
</body>
</html>