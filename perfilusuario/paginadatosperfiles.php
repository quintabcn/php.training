<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $usuario=$_GET['usu'];
        $password=$_GET['con'];

        require_once("datos_conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");

        $consulta="SELECT USUARIO, PASSWORD, PERFIL FROM PERFILUSUARIOS WHERE USUARIO=? AND PASSWORD=?";

        echo "<br><br>";

        $resultados=mysqli_prepare($conexion, $consulta);

        $ok=mysqli_stmt_bind_param($resultados, 'ss', $usuario, $password);

        $ok=mysqli_stmt_execute($resultados);

        if($ok==false){
            echo "Error en la consulta";
        }else{
            $ok=mysqli_smt_bind_result($resultados, $usuario, $password, $perfil);
        }

        while(mysqli_stmt_fetch($resultados)){
            echo "Hola ".$usuario."<br>";
            echo "Tu perfil es ".$perfil."<br>";
        }

        if($perfil=="administrador"){
            include ("menuadministrador.php");
        }else{
            include ("menuusuario.php");
        }


        mysqli_stmt_close($resultados);
        mysqli_close($conexion);

    ?>
</body>
</html>