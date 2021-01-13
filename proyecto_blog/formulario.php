<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de Blog</title>

    <style>
        h2{
            text-align: center;
        }

        table{
            width:50%;
            margin: auto;
            background-color: #ff9;
            border: solid 2px #ff9900;
            padding: 5px;
        }

        td{
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <h2>Nueva Entrada</h2>
    <form action="insertarcontenido.php" method="post" enctype="multipart/form-data" name="form1">
        <table>
            <tr>
                <td>Título:
                    <label for="campo_titulo"></label>
                </td>
                <td>
                    <input type="text" name="campo_titulo" id="campo_titulo">
                </td>
            </tr>
            <tr>
                <td>Comentarios:
                    <label for="area_comentarios"></label>
                </td>
                <td>
                    <textarea name="area_comentarios" id="area_comentarios" cols="50" rows="10"></textarea>
                </td>
            </tr>
                <input type="hidden" name="MAX_TAM" value="2097152">
            <tr>
                <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2Mb
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <input type="file" name="imagen" id="imagen">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <a href="mostrarblog.php">Página de Visualización del Blog</a>
                </td>
            </tr>
        </table>
    </form>
    <p>&nbsp;</p>
</body>
</html>