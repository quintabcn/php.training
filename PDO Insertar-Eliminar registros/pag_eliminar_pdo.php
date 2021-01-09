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
    $search_ingredient=$_POST['ingredient_erase'];
    //$search_language=$_POST['language'];

    try{

        $base= new PDO('mysql:host=localhost; dbname=perfulist', 'root', '');

        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $base->exec("SET CHARACTER SET utf8");

        //$sql="SELECT perfume FROM TOP_NOTES WHERE top_note= :n_1 and top_note= :n_2";

       /* $sql="INSERT INTO ingredients (ingredient, language) 
                    VALUES (:n_ingredient, :n_language)";*/

        $sql="DELETE FROM ingredients 
                    WHERE ingredient=:n_ingredient";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(
                    ":n_ingredient"=>$search_ingredient
                    ));

        echo "Registro Eliminado <br>";

/*         while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "".$registro['perfume'].", ";
        } */

        $resultado->closeCursor();

        
    }catch(Exception $e){

        die('Error: ' . $e->GetMessage());

    }finally{

        $base=null;
    }



    ?>

</body>
</html>