<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        table{
            margin: auto;
            left: 0;
        }
    </style>
</head>
<body>
    <form action="enviarmail.php" method="POST" name="formulario">
        <table width="500px">
            <tr>
                <td>
                    <label for="nombre">Nombre:*</label>
                </td>
                <td>
                    <input type="text" name="nombre" maxlength="50" size="25">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="apellido">Apellido:*</label>
                </td>
                <td>
                    <input type="text" name="apellido" maxlength="50" size="25">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Dirección e-mail:*</label>
                </td>
                <td>
                    <input type="text" name="email" maxlength="80" size="35">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telefono">Teléfono</label>
                </td>
                <td>
                    <input type="text" name="telefono" maxlength="50" size="25">
                </td>
            </tr>
            <tr>
                <td>Asunto</td>
                <td>
                    <label for="asunto"></label>
                    <input type="text" name="asunto" id="asunto">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="comments">Comentarios:*</label>
                </td>
                <td>
                    <textarea name="comentarios" maxlength="500" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>