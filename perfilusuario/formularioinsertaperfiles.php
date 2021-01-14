<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertarregistrosperfiles.php" method="get">
        <p>
            <label>Usuario:
                <input type="text" name="usu">
            </label>
            <br>
            <label>Contraseña:
                <input type="text" name="con">
            </label>
        </p>
        <p>Perfil:
            <label for="perfil"></label>
            <select name="perfil" id="perfil">
                <option>Administrador</option>
                <option>Usuario</option>
            </select>
        </p>
        <p>
            <input type="submit" name="enviando" value="Registro">
        </p>
    </form>
</body>
</html>