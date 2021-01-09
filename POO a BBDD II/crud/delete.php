<?php

    include("conexion.php");

    $id=$_GET["id"];

    $base->query("DELETE FROM ingredients WHERE idingredient='$id'");

    header("Location:index.php");

?>