<?php

    // Paso 1- Recibimos los datos de la imagen

    $nombre_imagen=$_FILES['imagen']['name'];
    $tipo_imagen=$_FILES['imagen']['type'];
    $tamany_imagen=$_FILES['imagen']['size'];
    echo $_FILES['imagen']['size'];

    // Paso 2- Ruta de la carpeta de destino en Servidor (adaptado a XAMPP)

    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'php.training\imagenes_servidor\assets';

    // Paso 3- Movemos la imagen del directorio temporal al dir destino.

    move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);


?>