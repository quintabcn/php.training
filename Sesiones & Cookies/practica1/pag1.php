<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset ($_COOKIE["idioma_seleccionado"])){

    if ($_COOKIE["idioma_seleccionado"]=="es"){

        header ("location:spanish.php");

    }else if ($_COOKIE["idioma_seleccionado"]=="en"){

        header ("location:english.php");

    }

}

?>
<table width="25%" border="0" align="center">
    <tr>
        <td coldspan="2" aliign="center"><h1>Elige idioma</h1></td>
    </tr>
    <tr>
        <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/Spain.png" width="90" height="90" alt=""></a></td>
        <td align="center"><a href="creaCookie.php?idioma=en"><img src="img/Akrotiri.png" width="90" height="90" alt=""></a></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>