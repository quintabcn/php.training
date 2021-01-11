<?php

    if(isset($_POST['cr'])){

        $ingre=$_POST['ingre'];
        $breve=$_POST['breve'];
        $larga=$_POST['larga'];

        $sql="INSERT INTO ingredients (ingredient, description_short, description_long) VALUES (:ingred, :short, :long)";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":ingred" =>$ingre, ":short" =>$breve, ":long" =>$larga));

        header ("Location:index.php");
    }

?>