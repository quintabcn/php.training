<?php

    // Paso 1- Recibimos los datos de la imagen

    $nombre_imagen=$_FILES['imagen']['name'];
    $tipo_imagen=$_FILES['imagen']['type'];
    $tamany_imagen=$_FILES['imagen']['size'];
    
    echo $_FILES['imagen']['size'];
    echo $_FILES['imagen']['type'];


    if($tamany_imagen<=5000000){
        if( $tipo_imagen==="image/jpeg" || 
            $tipo_imagen==="image/jpg" ||
            $tipo_imagen==="image/png" ||
            $tipo_imagen==="image/gif"){

                // Paso 2- Ruta de la carpeta de destino en Servidor (adaptado a XAMPP)

                $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/php.training/imagenes_servidor/assets/';

                // Paso 3- Movemos la imagen del directorio temporal al dir destino.

                move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
    
        }else{
                echo "El tipo de archivo no es correcto";
        }
    }else{
        echo "El tamaño es demasiado grande";
    }

    require("conectar.php");
    $base=Conectar::conexion();

    $sql="UPDATE perfumes SET photo=:photo WHERE idperfume=:id";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":photo" =>$nombre_imagen, ":id" => 2));

?>
