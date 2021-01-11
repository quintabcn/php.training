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



    // ----- PAGINACION ------

        $tamany=5;    

            if(isset($_GET['pagina'])){ 
                if($_GET['pagina']==1){
                    header("Location:index.php");
                }else{
                    $pag=$_GET['pagina'];
                }
            }else{
                $pag=1;
            }

            $start=($pag-1)*$tamany;

            $sql_total="SELECT * FROM ingredients";

            $resultado=$base->prepare($sql_total);
            $resultado->execute(array());

            $numfilas=$resultado->rowCount();

            $tot_pag=ceil($numfilas/$tamany);

    //------------- CONSULTA --------------

    $registros=$base->query("SELECT * FROM ingredients LIMIT $start, $tamany")->fetchALL(PDO::FETCH_OBJ);

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
    
    <H1>CRUD <span class="subtitulo">Create Read Update Delete</span></H1>

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
            <td class="bot">
                <a href="editar.php?idingredient=<?php echo $ingredient->idingredient?> 
                                    & ingredient=<?php echo $ingredient->ingredient?>
                                    & description_short=<?php echo $ingredient->description_short?>
                                    & description_long=<?php echo $ingredient->description_long?>
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
                //---------- PAGINACION --------------

                for($i=1; $i<=$tot_pag; $i++){
                    echo "<a href='?pagina=" .$i . "'>" .$i. "</a>  ";
                }
                ?>
            </td>
        </tr>
    </table>
    </form>
<p>&nbsp;</p>

</body>
</html>