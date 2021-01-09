<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=rand(000000,999999);
        echo "El número generado es el ". $num1."<br/>";

        $DesdeLetra = "A";
        $HastaLetra = "Z";
        $DesdeNumero = 000000;
        $HastaNumero = 999999;

        $letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
        $numeroAleatorio = rand($DesdeNumero, $HastaNumero);

        echo "<strong>Código: </strong> ".$numeroAleatorio.$letraAleatoria."<br/>";
        

    ?>
</body>
</html>