<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hoja.css">
    <title>CRUD</title>
</head>
<body>

    <?php
    
        include ("conexion.php");

        $registros=$base->query("SELECT * FROM ingredients")->fetchALL(PDO::FETCH_OBJ);
    
    ?>
    
    <H1>CRUD <span class="subtitulo">Create Read Update Delete</span></H1>

    <table width="50%" border="0" align="center">
        <tr>
            <td class="primera_fila">Id</td>
            <td class="primera_fila">Ingrediente</td>
            <td class="primera_fila">Descripcion Breve</td>
            <td class="primera_fila">Detalle</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>

        <?php

        foreach($registros as $ingredient):?>

        <tr>
            <td><?php echo $ingredient->idingredient?></td>
            <td><?php echo $ingredient->ingredient?></td>
            <td><?php echo $ingredient->description_short?></td>
            <td><?php echo $ingredient->description_long?></td>

            <td class="bot">
                <a href="delete.php?id=<?php echo $ingredient->idingredient?>">
                    <input type='button' name='del' id='del' value='Borrar'>
                </a></td>
            <td class="bot"><input type='button' name='up' id='up' value='Actualizar'></td>
            <td></td>
        </tr>

        <?php
        endforeach;
        ?>


        <tr>
            <td></td>
            <td><input type='text' name='ingre' size='10' class='centrado'></td>
            <td><input type='text' name='breve' size='10' class='centrado'></td>
            <td><input type='text' name='larga' size='10' class='centrado'></td>
            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
            <td></td>
            <td></td>
        </tr>

    </table>
<p>&nbsp;</p>
</body>
</html>