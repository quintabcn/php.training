<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require ("modelo/paginacion.php");
        require ("modelo/insertar.php");
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
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

            foreach($matrizingredientes as $ingredient):?>

            <tr>
                <td><?php echo $ingredient['idingredient']?></td>
                <td><?php echo $ingredient['ingredient']?></td>
                <td><?php echo $ingredient['description_short']?></td>
                <td><?php echo $ingredient['description_long']?></td>

                <td class="bot">
                    <a href="Modelo/delete.php?id=<?php echo $ingredient['idingredient']?>">
                        <input type='button' name='del' id='del' value='Borrar'>
                    </a></td>
                <td class="bot">
                    <a href="Modelo/editar.php?idingredient=<?php echo $ingredient['idingredient']?> 
                                        & ingredient=<?php echo $ingredient['ingredient']?>
                                        & description_short=<?php echo $ingredient['description_short']?>
                                        & description_long=<?php echo $ingredient['description_long']?>
                                        ">
                        <input type='button' name='up' id='up' value='Actualizar'>
                    </a></td>
                <td></td>
            </tr>

            <?php
            endforeach;
            ?>


            <tr>
                <td></td>
                <td><input type='text' name='ingre' size='10' class='centrado'></td>
                <td><input type='text' name='breve' size='10' class='centrado' value="-"></td>
                <td><input type='text' name='larga' size='10' class='centrado' value="-"></td>
                <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="7">
                    <?php
                        for($i=1; $i<=$tot_pag; $i++){
                            echo "<a href='?pagina=" .$i . "'>" .$i. "</a>  ";
                        }
                    ?>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>