<?php

    require_once("conectar.php");
    $base=Conectar::conexion();

    $id=$_GET["id"];

    $base->query("DELETE FROM ingredients WHERE idingredient='$id'");

    header("Location:../index.php");

?>