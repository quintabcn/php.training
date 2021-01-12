<?php
    
    if($_POST["comments"]="" || $_POST["nombre"]="" || $_POST["apellido"]="" || $_POST["email"]){

        echo "Ha habido un error. Revisa los campos";

        die();
        
    }

    $textomail=$_POST["comments"];
    $destinatario=$_POST["email"];
    $asunto=$_POST["asunto"];
    $header="MIME-Version: 1.0\r\n";
    $header.="Content-type: text/html; charset=iso-8859-1\r\n";
    $header.="From: Contact Form MMQ <El rey del pollo frito> \r\n";

    $exito=mail($destinatario,$asunto,$textomail,$header);

    if($exito){
        echo "Mensaje enviado con éxito";
    }else{
        echo "Ha habido un error";
    }

?>