<?php

// Creación variable para recuperar datos introducidos de busqueda

$busqueda=$_GET["buscar"];


// Datos de conexion

        require("conexion.php");
        
// Función Conexión al servidor, se graba en variable $conexion, con mensaje log de error.
        
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

        $consulta="SELECT * FROM $db_tabla WHERE $db_campo=$busqueda";

        $resultados=mysqli_query($conexion, $consulta);

// Mostrar registros de la tabla a través de array asociativo

        while($fila=mysqli_fetch_array($resultados)){

            echo "<table><tr><td>";

            echo $fila['ingredient']. "</td><td>";

            echo $fila['language']. "</td>";

            echo "</tr></table><br>";


        }

        // Cerrar la conexión

        mysqli_close($conexion);


        ?>