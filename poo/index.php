<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Perfume {  // Definicion de clase
        
        var $NotasSalida;  // Propiedades de la clase
        var $NotasCorazon;
        var $NotasFondo;

        function Perfume(){ // Metodo constructor
            $this-> NotasSalida="";
            $this-> NotasCorazon="";
            $this-> NotasFondo="";
        }

        function añadir(){ // Métodos de la clase
            echo "Hay que actualizar sus notas de salida <br>";
        }
        
        function comparar(){
            echo "con eso podrás comparar con otros perfumes <br>";
        }

        function gustar(){
            echo "Y decidir cual te gusta más <br>";
        }

        function establece_notas($nota_salida, $nombre_perfume){
            $this->NotasSalida=$nota_salida;

            echo "La nota de Salida de " .$nombre_perfume . " es " .$this->NotasSalida . "<br>";
        }

    }

    $Sauvage=new Perfume(); //Llamada al método constructor, generando instancias
    $Aventus=new Perfume();
    $BadBoy=new Perfume();

    $Sauvage->establece_notas("Jazmin","Sauvage de Dior");
    $BadBoy->establece_notas("Bergamota","Bad Boy");
    $Aventus->establece_notas("Piña","Aventus de Creed");

    //echo $Sauvage-> NotasCorazon;

    ?>

</body>
</html>