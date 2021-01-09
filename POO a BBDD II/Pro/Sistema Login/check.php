<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    try{

        $base=new PDO("mysql:host=localhost; dbname=perfulist", 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM users WHERE username=:user AND password=:pass";

        $resultado=$base->prepare($sql);

        $user=htmlentities(addslashes($_POST['username']));
        $pass=htmlentities(addslashes($_POST['password']));

        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":pass", $pass);

        $resultado->execute();

        $registro=$resultado->rowCount();

        if($registro!=0){

            echo "<h2>Bienvenida</h2>"

        }else{
            header ("location:login.php");
        }





    }catch (Exception $e){

        die("Error: " .$e->getMessage());

    }

    ?>
</body>
</html>