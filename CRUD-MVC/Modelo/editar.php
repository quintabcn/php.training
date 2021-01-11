<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Actualizar Registro</title>
</head>
<body>

<?php

    require_once("conectar.php");
    $base=Conectar::conexion();

    if(!isset ($_POST['update']))
    {
        $idingredient=$_GET['idingredient'];
        $ingredient=$_GET['ingredient'];
        $description_short=$_GET['description_short'];
        $description_long=$_GET['description_long'];

    }else{

        $id=$_POST['id'];
        $ingred=$_POST['ingred'];
        $short=$_POST['short'];
        $long=$_POST['long'];

        $sql="UPDATE ingredients SET ingredient=:ingred, description_short=:short, description_long=:long WHERE idingredient=:miid";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":miid" =>$id, ":ingred" =>$ingred, ":short" =>$short, ":long" =>$long));

        header ("Location:../index.php");

    }

?>
    <H1>ACTUALIZAR <span class="subtitulo">Actualiza los registros</span></H1>

    <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table width="50%" border="0" align="center">
            <tr>
                <td class="primera_fila">Id</td>
                <td><input type="hidden" name="id" id="id" value="<?php echo $idingredient ?>">                    
                </td>
            </tr>             
            <tr>
                <td class="primera_fila">Ingrediente</td>
                <td><input type="text" name="ingred" id="ingred"
                    value="<?php echo $ingredient ?>">
                </td>
            </tr>
            <tr>
                <td class="primera_fila">Descripcion Breve</td>
                <td><input type="text" name="short" id="short"
                    value="<?php echo $description_short ?>">
                </td>
            </tr>
            <tr>
                <td class="primera_fila">Detalle</td>
                <td><input type="text" name="long" id="long"
                    value="<?php echo $description_long ?>">
                </td>
            </tr>

            <tr>
                <td class="bot" colspan="2">
                    <input type="submit" name="update" id="update" value='Actualizar'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>