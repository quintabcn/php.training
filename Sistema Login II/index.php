<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleII.css">
</head>
<body>
<?php

if (isset($_POST['send'])){

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

            session_start();
            $_SESSION["user"]=$_POST['username'];

        }else{
            echo "ERROR. Usuario o password incorrecto";
        }





    }catch (Exception $e){

        die("Error: " .$e->getMessage());

    }
}

if(!isset($_SESSION['user']))
{
    include ("formulario.html");
}else{
    echo "Usuario: " . $_SESSION['user'];
}


?>


<div class="pictures">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/bleuchanel.png"></div>
        <div class="swiper-slide"><img src="img/bulgari.png"></div>
        <div class="swiper-slide"><img src="img/ckone.png"></div>
        <div class="swiper-slide"><img src="img/grioprofumo.png"></div>
        <div class="swiper-slide"><img src="img/interdit.png"></div>
        <div class="swiper-slide"><img src="img/sauvage.png"></div>
    </div>
</div>
</body>
</html>