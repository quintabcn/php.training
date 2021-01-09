<?php

$labusqueda=$_GET["buscar"];

$mipag=$_SERVER["PHP_SELF"];

if($labusqueda!=NULL){

    ejecuta_busqueda($labusqueda);
}else{
    echo ("<form action='". $mipag . "' method='get'>

    <label>Buscar: <input type='text' name='buscar'></label>

    <input type='submit' name='enviando' value='DALE!'>
    
    </form>"); 
}

function ejecuta_busqueda($labusqueda){

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
                $consulta="SELECT * FROM ingredients WHERE ingredient LIKE '%$labusqueda%'";
                
                $resultados=mysqli_query($conexion, $consulta);

// Mostrar registros de la tabla a través de array asociativo
                while($fila=mysqli_fetch_assoc($resultados)){

                echo "<table><tr><td>";
                echo $fila['ingredient']. "</td><td>";
                echo $fila['language']. "</td>";
                echo "</tr></table><br>";
                
                }
                

// Cerrar la conexión
                mysqli_close($conexion);

        }

        ?>