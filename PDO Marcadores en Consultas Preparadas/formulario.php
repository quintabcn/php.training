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
     <form action="pag_busqueda_pdo.php" method="get">
        <table><tr><td>
        Nota 1: </td><td><input type="text" name="nota1"></td></tr>
        <tr><td>
        Nota 2: </td><td><input type="text" name="nota2"></td></tr>
        <tr><td colspan="2">
        <input type="submit" name="enviado" value="¡Dale!"> 
        </td></tr></table>
    
    </form>
</body>
</html>