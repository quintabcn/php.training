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
            $base=new PDO('mysql:host=localhost; dbname=perfulist', 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");

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

            echo "Registros " .$tamany . "/" .$numfilas . "<br>";
            echo "Página " . $pag . "/" .$tot_pag ."<br>";

            $resultado->closeCursor();

            $sql_limit="SELECT * FROM ingredients LIMIT $start, $tamany";

            $resultado=$base->prepare($sql_limit);
            $resultado->execute(array());

            echo "<table>";

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                
                echo "<tr><td>Ingrediente: </td><td>" .$registro['ingredient'] . "</td><td> Descripción: </td><td>" .$registro['description_short'] . "</td></tr>";}

            echo "</table>";

        }
        catch (Exception $e){

            die ('Error' . $e->getMessage());
            echo "Línea del error: " . $e->getLine();

        }

    //---------- PAGINACION --------------

        for($i=1; $i<=$tot_pag; $i++){
            echo "<a href='?pagina=" .$i . "'>" .$i. "</a>  ";
        }

    ?>
</body>
</html>