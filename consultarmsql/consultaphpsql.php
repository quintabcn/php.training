<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Datos de conexion

        require("conexion.php");
        
        // Función Conexión al servidor, se graba en variable $conexion, con mensaje log de error.

        // Opcion conexión directa a base -> $conexion=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password);

        if(mysqli_connect_errno()){

            echo "Fallo en la conexión con servidor BBDD";

            exit();
        }

        // Conexión a Base de Datos con log de error

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de Datos");
        
        // Set del tipo de carácteres, p.ej para que reconozca acentos

        mysqli_set_charset($conexion, "utf8");

        // Función Consulta, resultado se graba en variable $consulta

        $consulta="SELECT * FROM $db_tabla";

        $resultados=mysqli_query($conexion, $consulta);

        // Mostrar registros de la tabla -> opcion purista ($fila=mysqli_fetch_row($resultados))==true)

        while($fila=mysqli_fetch_row($resultados)){;

            for($i=0; $i<count($fila); $i++){
                echo $fila[$i] . " ";
                
            }

            echo "<br>";

        // echo count($fila) . " ";

        // echo $fila[0] . " ";
        
        // echo $fila[1] . " ";
        
        // echo $fila[2] . " ";
        
        // echo $fila[3] . " <br>";
        }

        // Cerrar la conexión

        mysqli_close($conexion);


        
        //$fila=mysqli_fetch_row($resultados);
            //for($i=0; $i<10; $i++){
              //  echo $fila[$i] . "  <br>";
            // }

        ?>

</body>
</html>




