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
    $search1=$_GET['nota1'];
    $search2=$_GET['nota2'];

    try{

        $base= new PDO('mysql:host=localhost; dbname=perfulist', 'root', '');

        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT perfume FROM TOP_NOTES WHERE top_note= :n_1 and top_note= :n_2";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":n_1"=>$search1, ":n_2"=>$search2));

        echo "Here you are: <br>";

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "".$registro['perfume'].", ";
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