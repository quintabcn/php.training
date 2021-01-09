<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table{
            width: 33%;
            margin: auto;
            background-color: #4438eb;
            border: 2px solid #c9c9c9;
            color: #fff;
            padding: 0.5rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        td{
            text-align: center;
        }
    </style>
</head>
<body>
     <form action="pag_insercion_pdo.php" method="post">
        <table><tr><td>
        Ingrediente: </td><td><input type="text" name="ingredient"></td></tr>
        <tr><td>
        Idioma: </td><td><input type="text" name="language"></td></tr>
        <tr><td colspan="2">
        <input type="submit" name="enviado" value="Crea"> 
        </td></tr></table>
    </form>
    &nbsp;
    &nbsp;
    <form action="pag_eliminar_pdo.php" method="post">
        <table><tr><td>
        Ingrediente: </td><td><input type="text" name="ingredient_erase"></td></tr>
        <tr><td>
        <input type="submit" name="enviado" value="Elimina"> 
        </td></tr></table>
    
    </form>
</body>
</html>