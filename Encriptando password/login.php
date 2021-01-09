<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        h1,h2{
            text-align: center;
        }

        table{
            width: 25%;
            background-color: #ffc;
            border: 2px dotted #F00;
            margin: auto;
        }

        .izq{
            text-align: left;
        }

        .der{
            text-align: left;
        }

        td{
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>
    <?php

    $autenticado=false;
    
    if(isset($_POST["enviar"])){
        try{

            $login=htmlentities(addslashes($_POST['login']));
            $password=htmlentities(addslashes($_POST['password']));
            $contador=0;

            $base=new PDO("mysql:host=localhost; dbname=perfulist",'root','');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql="SELECT * FROM users WHERE username=:login";
            $resultado=$base->prepare($sql);



/*             $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password); */
            $resultado->execute(array(":login"=>$login));

                while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                    //echo "Usuario: " .$registro['username'] . " Contraseña: " . $registro['password'] . "<br>";
                
                    if(password_verify($password, $registro['password'])){

                        $contador++;      

                    }
                
                }
                if($contador>0){

                    echo "usuario registrado";

                }else{

                    echo "Usuario no registrado";
                }

                $resultado->closeCursor();

/*             $numero_registro=$resultado->rowCount();

            if($numero_registro!=0){

/*                 session_start();
                $_SESSION["usuario"]=$_POST["login"];  

                $autenticado=true;

                if(isset($_POST['recordar'])){
                    setcookie("nombre_usuario", $_POST['login'], time()+86400);
                }

            }else{
                echo "Error -> Usuario o Contraseña incorrecta";
            } */

        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }
    }
    
    if(isset($_COOKIE["nombre_usuario"])){

        echo "¡Hola " . $_COOKIE["nombre_usuario"] . "!";

    }else if($autenticado==true){

        echo "¡Hola " . $_POST["login"] . "!";

    }
    ?>
    <?php

/*     if(!isset($_SESSION["usuario"])){
        include("formulario.html");
    }else{
        echo "Usuario: " . $_SESSION["usuario"];
    } */

    if($autenticado==false){

        if(!isset($_COOKIE["nombre_usuario"])){

            include ("formulario.html");
        }
    }

    ?>

    <h2>Contenido de la Web</h2>
    <table width="800" border="0">
        <tr>
            <td><img src="img/bleuchanel.png" width="300" height="200"></td>
            <td><img src="img/ckone.png" width="300" height="200"></td>
        </tr>
        <tr>
            <td><img src="img/interdit.png" width="300" height="200"></td>
            <td><img src="img/sauvage.png" width="300" height="200"></td>
        </tr>
    </table>

    <?php
    
        if($autenticado==true || isset($_COOKIE["nombre_usuario"])){

            include ("zonaregistrados.html");
        }
    
    ?>
    
</body>
</html>