<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Establecer conexión (método procedimental)        

        $miconexion=mysqli_connect("localhost","root","","bbddblog");

        // comprobar conexión

        if(!$miconexion){
            echo "La conexión falló" . mysqli_error();
            exit();
        }

        if($_FILES['imagen']['error']){

            switch($_FILES['imagen']['error']){

                case 1: // Error de exceso de tamaño de archivo en php.ini
                    echo "El tamaño del archivo excede lo permitido por el servidor";
                    break;

                case 2: // Error tamaño archivo marcado desde formulario
                    echo "El tamaño del archivo excede 2Mb";
                    break;

                case 3: // Corrupción de archivo
                    echo "El envío de archivo se interrumpió";
                    break;

                case 4: //No hay fichero
                    echo "No se ha enviado ningún archivo";
                    break;
            }
        }else{
            echo "Entrada subida correctamente <br>";

            if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

                $destino_de_ruta="imagenes/";

                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta.$_FILES['imagen']['name']);

                echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio de imágenes";

            }else{
                echo "El archivo no se ha podido copiar al directorio de imágenes";
            }
        }

        $eltitulo=$_POST['campo_titulo'];
        $lafecha=date("Y-m-d H:i:s");
        $elcomentario=$_POST['area_comentarios'];
        $laimagen=$_FILES['imagen']['name'];

        $miconsulta="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('".$eltitulo."', '".$lafecha."', '".$elcomentario."', '".$laimagen."')";

        $resultado=mysqli_query($miconexion, $miconsulta);

        // Cerramos la conexion

        mysqli_close($miconexion);

        echo "<br/> Se ha agregado el comentario con éxito.<br><br>";



    ?>
</body>
</html>