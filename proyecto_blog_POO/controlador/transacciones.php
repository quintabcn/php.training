<?php

    include_once("../modelo/objetoblog.php");
    include_once("../modelo/manejaobjetos.php");

    try{

        $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
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

                $destino_de_ruta="../imagenes/";

                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta.$_FILES['imagen']['name']);

                echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio de imágenes";

            }else{
                echo "El archivo no se ha podido copiar al directorio de imágenes";
            }
        }

        $manejoObjetos=new manejoObjetos($miconexion);

        $blog=new objetoblog;

        $blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']), ENT_QUOTES));
        $blog->setFecha(Date("Y-m-d H:i:s"));
        $blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']), ENT_QUOTES));
        $blog->setImagen(htmlentities($_FILES['imagen']['name']));

        $manejoObjetos->insertaContenido($blog);

        echo "<br/> Entrada de blog agregada con éxito <br/>";

    }catch (Exception $e){

        die ("Error: ". $e->getMessage());

    }

?>