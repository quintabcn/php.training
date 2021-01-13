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

                $miconsulta="SELECT * FROM contenido "
    
    ?>

     
</body>
</html>