<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Conexión a la base de datos

    try{

        $base= new PDO('mysql:host=localhost; dbname=perfulist', 'root', '');

        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT brand_name FROM BRANDS WHERE country=?";

        $resultado=$base->prepare($sql);

        $resultado->execute(array("FR"));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre Marca ".$registro['brand_name']."<br>";
        }

        $resultado->closeCursor();

        
    }catch(Exception $e){

        die('Error: ' . $e->GetMessage());

    }finally{

        $base=null;
    }



    ?>

</body>
</html>