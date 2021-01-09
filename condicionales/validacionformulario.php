<style>

        .no_validado{
            font-size: 18px;
            color: #f00;
            font-weight: bold;
        }

        .validado{
            font-size: 18px;
            color: #0c3;
            font-weight: bold;
        }

    </style>

<?php

if(isset($_POST["enviando"])){

    //$usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];

    if($edad<=18){
        echo "<p class='no_validado'> Eres menor de edad </p>";

    }else if($edad<=40){
        echo "<p class='validado'>Est&aacute;s hecho un tigre </p>";
    }else if($edad<=65){
        echo "<p class='no_validado'> ¿Ya saliste a comprar Viagra? </p>";
    }else{
        echo "<p class='no_validado'> ¡Milagro! </p>";
    }


}

?>