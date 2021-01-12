<?php

    // Paso 1- Recibimos los datos del archivo desde la carga en hoja index.php

    $nombre_archivo=$_FILES['archivo']['name'];
    $tipo_archivo=$_FILES['archivo']['type'];
    $tamany_archivo=$_FILES['archivo']['size'];
    
    echo $_FILES['archivo']['size'];
    echo " | ";
    echo $_FILES['archivo']['type'];
    

    if($tamany_archivo<=5000000){ // se limita a imagenes y pdf, arbitrariamente.
        if( $tipo_archivo==="image/jpeg" || 
            $tipo_archivo==="image/jpg" ||
            $tipo_archivo==="image/png" ||
            $tipo_archivo==="document/pdf"){

                // Paso 2- Ruta de la carpeta de destino en Servidor (adaptado a XAMPP)

                $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/php.training/imagenes_servidor_blob/assets/';

                // Paso 3- Movemos la imagen del directorio temporal al dir destino.

                move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
    
        }else{
                echo "El tipo de archivo no es correcto";
        }
    }else{
        echo "El tamaño es demasiado grande";
    }

    require("conectar.php");
    $base=Conectar::conexion();

    $archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,"r");
    $contenido=fread($archivo_objetivo, $tamany_archivo);
    fclose($archivo_objetivo);
    
    $sql="INSERT INTO archives (name_archive, type_archive, content_archive) 
                 VALUES (:nom, :tipo, :cont)";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":nom"=>$nombre_archivo, ":tipo"=>$tipo_archivo, ":cont"=>$contenido));

/*     if (mysqli_affected_rows($resultado)==1){
        echo "success";
    }
    else {
        echo "fail";
    } */

?>
