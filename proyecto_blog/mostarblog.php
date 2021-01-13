<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Blog</h2>
    <hr/>

    <?php
    
                // Establecer conexión (método procedimental)        

                $miconexion=mysqli_connect("localhost","root","","bbddblog");

                // comprobar conexión
        
                if(!$miconexion){
                    echo "La conexión falló" . mysqli_error();
                    exit();
                }

                $miconsulta="SELECT * FROM contenido ORDER BY fecha DESC";

                if($resultado=mysqli_query($miconexion, $miconsulta)){
                    while($registro=mysqli_fetch_assoc($resultado)){
                        echo "<h3>".$registro['titulo']."</h3><br/>";
                        echo "<h4>".$registro['fecha']."</h4><br/>";
                        echo "<div style='width:400px'>".$registro['comentario']."</div><br/><br/>";

                        if($registro['imagen']!==""){
                            echo "<img src='imagenes/" . $registro['imagen']. "' width='300px' >";
                        }

                        echo "<hr/>";
                    
                    }
                }
    
    ?>

</body>
</html>