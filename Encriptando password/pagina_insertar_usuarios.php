<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $usuario=$_POST["usu"];
    $contrasenia=$_POST["contra"];

    $pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT,array("cost"=>12));

    try{

        $base=new PDO("mysql:host=localhost; dbname=perfulist",'root','');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
            
        $sql="INSERT INTO users (username, password) VALUES (:usu, :contra)";
        $resultado=$base->prepare($sql);

        $resultado->execute(array(':usu' => $usuario, ':contra' => $pass_cifrado));

        echo "Registro Insertado";

        $resultado->closeCursor();

/*             $login=htmlentities(addslashes($_POST['login']));
            $password=htmlentities(addslashes($_POST['password']));

            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);
            $resultado->execute();

            $numero_registro=$resultado->rowCount(); */
    }catch (Exception $e){

        echo "Linea del error: " .$e->getLine();

    }finally{

        $base=null;

    }
    
    ?>
</body>
</html>