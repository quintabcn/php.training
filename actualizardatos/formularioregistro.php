<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        h1{
            text-align:center;
            color: #00F;
            border-bottom:dotted #0000ff;
            width: 50%;
            margin: auto;
            
        }

        table{
            border:1px solid #f00;
            padding: 20px 50px;
            margin-top:50px;
        }

        body{
            background-color: #ffc;
        }

    </style>
</head>
<body>
    <h1>Modificar Registro Marcas</h1>
    <form name="form1" method="get" action="pagina_resultados.php">
        <table border="0" align="center">
            <tr>
                <td>Buscar Marca</td>
                <td><label for="c_brand"></label>
                <input type="text" name="buscar" id="buscar"></td>
            </tr>
<!--             <tr>
                <td>País</td>
                <td><label for="c_country"></label>
                <input type="text" name="c_country" id="c_country"></td>
            </tr>
 -->            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Buscar"></td>
                <td align="center"><input type="reset" name="borrar" id="borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>